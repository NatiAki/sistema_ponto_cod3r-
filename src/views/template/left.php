<aside class="sidebar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="day_records.php">
                <i class="icofont-ui-check mr-2"></i>
                Registrar Ponto
                </a>
            </li>
            <li class="nav-item">
                <a href="">
                <i class="icofont-ui-calendar mr-2"></i>
                Relatorio Mensal 
                </a>
            </li>
            <li class="nav-item">
                <a href="">
                <i class="icofont-chart-histogram mr-2"></i>
                Relatorio Gerencial
                </a>
            </li>
            <li class="nav-item">
                <a href="">
                <i class="icofont-users mr-2"></i>
                Usuarios
                </a>
            </li>
        </ul>
    </nav>
    <div class="sidebar-widgets">
        <div class="sidebar-widget">
            <i class="icon icofont-hour-glass text-primary"></i>
            <div class="info">
                <span class="main text-primary" <?= $activeClock === 'workedInterval' ? 'active-clock' : ''?>>
                    
                    <?= $workedInterval ?>
                </span>
                <span class="label text-mutes">Horas Trabatlhadas</span>
            </div>
        </div>
        <div class="division my-3">
        <div class="sidebar-widget">
            <i class="icon icofont-ui-alarm text-danger"></i>
            <div class="info">
                <span class="main text-danger" <?= $activeClock === 'exitTime' ? 'active-clock' : ''?>>
                <?= $exitTime ?>
                </span>
                <span class="label text-mutes">Hora de saida</span>
            </div>
        </div>       
        </div>
    </div>
</aside>