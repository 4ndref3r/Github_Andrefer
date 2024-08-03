<?php  
    $user = $this->d['user'];
    $nombreusuario = $user->getUsuario();
?>
<?php  require_once "./app/views/inc/head.php"; ?>
<?php  require_once "./app/views/inc/teacher.php"; ?>

    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
      <div
        class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
        <div class="col-span-12 lg:col-span-8">
          <div class="flex items-center justify-between space-x-2">
            <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
              Bienvenido <?php echo  $nombreusuario; ?>
            </h2>
          </div>
        </div>
      </div>
    </main>

<?php   require_once "./app/views/inc/footer.php"; ?>