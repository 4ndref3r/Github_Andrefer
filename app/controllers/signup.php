<?php
    require_once './app/models/userModel.php';
    require './app/lib/phpmailer/src/Exception.php';
    require './app/lib/phpmailer/src/PHPMailer.php';
    require './app/lib/phpmailer/src/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    class Signup extends SessionController{
        function __construct()
        {
            parent::__construct();
        }

        function render(){
            $this->view->render('login/registration',[]);
        }

        function activate($params){
            error_log('Contenido de $params'.$params);
            $token=$params;
            $userModel=new UserModel();
            $usuario=$userModel->getUserByToken($token);
            $this->view->render('login/validationRegister',[
                'token'=>$token,
                'usuario'=>$usuario
            ]);
        }

        function newUser(){
            if($this->existPOST(['usuario','contra','nombre'])){
                $usuario=$this->getPost('usuario');
                $contra=$this->getPost('contra');
                $nombre=$this->getPost('nombre');

                if ($contra=='' || empty($contra) || empty($nombre)) {
                    $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
                }
                $user = new UserModel();
                $user->setUsuario($usuario);
                $user->setNombre($nombre);
                $user->setContra($contra);
                $user->setRol('Docente');
                $user->setEstado(1);
                $user->setToken('');
                $user->setExpiracion('');

                if ($user->exists($usuario)) {
                    $user->save();
                    $this->redirect('login',['success'=>SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
                }

            }else {
                $this->redirect('login',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }
        }

        public function sendConfirmationEmail() {
            $mail = new PHPMailer(true); // true para habilitar excepciones
            if($this->existPOST(['usuario','contra'])){
                $usuario=$this->getPost('usuario');
                $email=$this->getPost('contra');
                if ($usuario=='' || empty($usuario) || $email=='' || empty($email)) {
                    $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
                }
                $user = new UserModel();
                $user->setUsuario($email);
                $user->setContra('');
                $user->setEstado(0);
                $token=bin2hex(random_bytes(32));
                $expiracion=date('Y-m-d H:i:s', strtotime('+1 hour'));
                $user->setToken($token);
                $user->setExpiracion($expiracion);
                if ($user->exists($usuario)) {
                    $this->redirect('signup',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS]);
                }else{
                    try {
                        //Creando el token de validacion
                        $user->saveToken();
                        // Configurar el servidor de correo electrónico
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'ajno.fernando.947@gmail.com';
                        $mail->Password = PASSWORD_SERVER;
                        $mail->SMTPSecure = 'tls';
                        $mail->Port = 587;
                
                        // Configurar el remitente
                        $mail->setFrom('ajno.fernando.947@gmail.com', 'Horarios 4ndrefer');
                
                        //Recipients
                        $mail->addAddress($email, $usuario);     //Add a recipient
                
                        // Configurar el asunto y el cuerpo del correo electrónico
                        $mail->isHTML(true);
                        $mail->CharSet='UTF-8';
                        $mail->Subject = 'Confirmación de registro';
                        $mail->Body = '
                        <h2>Confirmación de registro</h2>
                        <p>Gracias por registrarte en 4ndrefer Horarios</p>
                        <p>Por favor, haz clic en el siguiente botón para activar tu cuenta:</p>
                        <a href="' . URL . 'signup/activate/' . $token . '/">
                            <button style="background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                            Activar cuenta
                            </button>
                        </a>
                        ';
                        // Enviar el correo electrónico
                        $mail->send();
                    } catch (Exception $e) {
                        echo 'Error al enviar correo electrónico: ' . $e->getMessage();
                    }
                    $this->redirect('login',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
                }
            }else {
                $this->redirect('',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }
        }


    }