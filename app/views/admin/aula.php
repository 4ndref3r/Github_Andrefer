<?php  
    $user = $this->d['user'];
    $usuario = $user->getNombre();
    $docentes = $this->d['docentes'];
?>
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
      <div
        class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
        <div class="col-span-12 lg:col-span-8">
          <div class="flex items-center justify-between space-x-2">
            <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
              Bienvenido <?php echo  $usuario; ?>
            </h2>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-10">
            <!-- Full Width Zebra Table -->
            <div class="card pb-4">
                <div class="my-3 flex h-8 items-center justify-between px-4 sm:px-5">
                <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                    Aulas
                </h2>
                <?php $this->showMessages(); ?>
                </div>
                <div>
                <!-- Modal newUsers -->
                <div class="card px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                    <div class="inline-space mt-5 flex">
                        <div x-data="{showModal:false}">
                        <button @click="showModal = true" class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                            Nueva Aula
                        </button>
                        <template x-teleport="#x-teleport-target">
                            <div class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5" x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                            <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300" @click="showModal = false" x-show="showModal" x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                            <div class="relative flex w-full max-w-lg origin-top flex-col overflow-hidden rounded-lg bg-white transition-all duration-300 dark:bg-navy-700" x-show="showModal" x-transition:enter="easy-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                                <div class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5">
                                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                    Creación de nueva aula
                                </h3>
                                <button @click="showModal = !showModal" class="btn -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                                </div>
                                <div class="flex flex-col overflow-y-auto px-4 py-4 sm:px-5">
                                <form action="<?php echo constant('URL'); ?>admin/newTeacher" method="post">
                                <div class="mt-4 space-y-4">
                                    <span>Nombre:</span>
                                    <input name="nombre" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Ingresa sus nombres" type="text" autocomplete="off">
                                    </label>
                                    <label class="block">
                                    <span>Capacidad:</span>
                                    <input name="aPaterno" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Ingresa el Apellido Paterno" type="text">
                                    </label>
                                    <label class="block">
                                    <span>Tipo:</span>
                                    <input name="aMaterno" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Ingresa el Apellido Materno" type="text">
                                    </label>
                                    <div class="grid grid-cols-2 gap-4">
                                        <label class="block">
                                        <span>Celular:</span>
                                        <input name="celular" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" type="number">
                                        </label>
                                        <label class="block">
                                        <span> Disponibilidad:</span>
                                        <input value="Bloquear horarios" class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" type="button">
                                        </label>
                                    </div>
                                    <label class="block"></label>                                    
                                    <div class="space-x-2 text-right">
                                    <a @click="showModal = !showModal" class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                        Cancelar
                                    </a>
                                    <button @click="showModal = false" class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
                                        Guardar
                                    </button>
                                    </div>
                                </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </template>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Fin -->
                <div class="mt-5">
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                    <table class="is-zebra w-full text-left">
                        <?php $cont=1; ?>
                        <thead>
                        <tr>
                            <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            #
                            </th>
                            <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Nombre
                            </th>
                            <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Capacidad
                            </th>
                            <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Tipo
                            </th>
                            <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Estado
                            </th>
                            <th class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                            Acciones
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($docentes as $docente){
                        ?>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo $cont; ?></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><input type="hidden" name="id" value="<?php echo $docente->getId();?>">
                                <?php echo $docente->getNombre(); ?>
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo $docente->getApellidoPaterno().' '.$docente->getApellidoMaterno(); ?></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo $docente->getCelular(); ?></td>
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5"><?php echo $docente->getEstado(); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center space-x-3">
                                <!-- Botón de Editar -->
                                <a href="<?php echo constant('URL').'admin/admValues/'.$docente->getId(); ?>" @click="$dispatch('open-modal', { id: <?php echo $docente->getId(); ?>" class="text-blue-600 hover:text-blue-900" title="Modificar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    </svg>
                                </a>
                                <?php if($docente->getEstado() == 1): ?>
                                <a href="<?php echo constant('URL').'admin/admDelete/'.$docente->getId(); ?>" class="text-red-600 hover:text-red-900" title="Deshabilitar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" />
                                        <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" />
                                        <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" />
                                    </svg>
                                </a>
                                <?php else: ?>
                                <a href="<?php echo constant('URL').'admin/admHabilite/'.$docente->getId(); ?>" class="text-red-600 hover:text-red-900" title="Habilitar">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php 
                        $cont++;
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
        </div>
      </div>
    </main>                   