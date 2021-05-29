<?= $this->extend('Layouts/default') ?>

<?= $this->section('title') ?>Resultado de la Consulta<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card is-hidden1">
    <div class="card-header"><p class="card-header-title">Resultado de la Consulta</p></div>
        

        <div class="card-content"><div class="content">

            <div class="container">
                
                
                    

                    
                    <div class="text is-size-6 has-text-centered">
                        <h1><b>Resultado de la consulta acerca del horario de circulación respecto al Pico y Placa</b></h1>
                        <p>Usted <b>SÍ</b> puede circular en su vehículo a la(s) <?= $hora ?> el día <?= $numeroDiaSemana ?> ( <?= $fecha ?> ) . Los días que no puede circular son los <?= $diaNoCircula ?> de 7:00 a 9:30 y de 16:00 a 19:30.</p>
                    </div>


                    

                

                    
                
            </div>


        </div>
    </div>           


</div>






<?= $this->endSection() ?>