<?= $this->extend('Layouts/default') ?>

<?= $this->section('title') ?>Consulta acerca del Pico y Placa<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card is-hidden1">
    <div class="card-header"><p class="card-header-title">Consulta acerca del Pico y Placa</p></div>
        

        <div class="card-content"><div class="content">

            <div class="container">
                
                <?= form_open("/PicoyPlaca/consulta") ?>
                    

                    
                    <div class="text is-size-6 has-text-centered">
                        <h1><b>Información acerca del Pico y Placa</b></h1>
                        <p>Si deseas consultar si tienes permiso para circular en tu vehículo, porfavor digita tu número de placa, e ingresa la hora y la fecha en la cual deseas circular. </p>
                    </div>


                    

                        <div class="field">
                            <label class="label" for="placa" class="form-label">Placa del vehículo</label>
                            <div class="control has-icons-left">
                                <input class="input" placeholder="Ejemplo: AAC-0123" type="text" class="form-control" name="placa" id="placa" 
                                value="<?= old('placa')?>">
                                <span class="icon is-small is-left">
                                <i class="fas fa-car"></i>
                                </span>
                            </div>   
                            
                        </div>

                        <div class="columns">

                            <div class="column">
                                
                                <div class="field">
                                    <label class="label" for="fecha" class="form-label">Fecha de circulación</label>
                                    <div class="control has-icons-left">
                                        <input class="input" placeholder="Usuario" type="date" class="form-control" name="fecha" id="fecha" 
                                        value="<?= old('fecha')?>">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-calendar-day"></i>
                                        </span>
                                    </div>   
                                
                                </div>

                            </div>

                            <div class="column">

                                <div class="field">
                                    <label class="label" for="hora" class="form-label">Hora de circulación</label>
                                    <div class="control has-icons-left">
                                        <input class="input" placeholder="Usuario" type="time" class="form-control" name="hora" id="hora" 
                                        value="<?= old('hora')?>">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-clock"></i>
                                        </span>
                                    </div>   
                            
                                </div>
                                
                            </div>
                            
                        </div>


                       

                        
                        



                        <div class="field">
                            
                            <button type="submit" class="button is-primary has-background-info-dark">Consultar</button>

                                
                                
                            
                        </div>


                </form>

                    
                
            </div>


        </div>
    </div>           


</div>






<?= $this->endSection() ?>