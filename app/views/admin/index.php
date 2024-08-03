<?php  
    $user = $this->d['user'];
    $tusers=$this->d['tusers'];
    $usuario = $user->getNombre();
?>
<?php  require_once "./app/views/inc/head.php"; ?>
<?php  require_once "./app/views/inc/admin.php"; ?>

    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
      <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 lg:col-span-12 xl:col-span-12">
              <div class="card col-span-12 mt-12 bg-gradient-to-r from-blue-500 to-blue-600 p-5 sm:col-span-8 sm:mt-0 sm:flex-row">
                <div class="flex justify-center sm:order-last">
                  <img class="-mt-16 h-40 sm:mt-0" src="<?php echo  URL;?>public/images/illustrations/doctor.svg" alt="image">
                </div>
                <div class="mt-2 flex-1 pt-2 text-center text-white sm:mt-0 sm:text-left">
                  <h3 class="text-xl">
                    <?php
                    $horaActual=date('H');
                    $horadia=14;
                    $horatarde=18;
                    $horanoche=24;
                    if($horaActual>=$horadia && $horaActual<$horatarde){
                      echo 'Buenos días, ';
                    }elseif($horaActual>=$horatarde && $horaActual<$horanoche){
                      echo 'Buenas tardes, ';
                    }else{echo 'Buenas noches, ';}?>
                    <span class="font-semibold"><?php echo $usuario; ?></span>
                  </h3>
                  <p class="mt-2 leading-relaxed">Ten un excelente día de trabajo</p>
                  <p>Tu progreso es <span class="font-semibold">Excelente!</span></p>

                  <button class="btn mt-6 border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30">
                    Ver horarios
                  </button>
                </div>
              </div>

              <div class="mt-4 sm:mt-5 lg:mt-6">
                <div class="flex h-8 items-center justify-between">
                  <h2 class="text-base font-medium tracking-wide text-slate-700 dark:text-navy-100">
                    Resumen
                  </h2>
                </div>
                <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5">
                  <div class="card space-y-4 p-5">
                    <div class="flex items-center space-x-3">
                      <div>
                        <h1 class="font-medium text-slate-900 line-clamp-1 dark:text-navy-100">
                          Usuarios
                        </h1>
                      </div>
                    </div>
                    <div>
                      <p>Registrados</p>
                      <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                        <?php echo $tusers; ?>
                      </p>
                    </div>
                  </div>
                  <div class="card space-y-4 p-5">
                    <div class="flex items-center space-x-3">
                      <div>
                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                          Docentes
                        </h3>
                      </div>
                    </div>
                    <div>
                      <p>Registrados</p>
                      <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                        06:00
                      </p>
                    </div>
                  </div>
                  <div class="card space-y-4 p-5">
                    <div class="flex items-center space-x-3">
                      <div>
                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                          Cursos
                        </h3>
                      </div>
                    </div>
                    <div>
                      <p>Habilitados</p>
                      <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                        11:00
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </main>

<?php   require_once "./app/views/inc/footer.php"; ?>