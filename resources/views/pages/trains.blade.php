@extends( 'layouts.app' )
@include ('partials.header')

<h3 class="text-center my-3">Train cards: </h3>

<div class="container">

    <div class="row">

        @foreach( $trains as $elem )
       
    
            <div class="card col-2 m-3">
                <div class="card-body">
                    <h5>{{$elem->azienda}}</h5>
                    <p>In partenza da: <b>{{$elem->stazione_di_partenza}}</b></hp>
                    <p>In arrivo a: <b>{{$elem->stazione_di_arrivo}}</b></p>
                    <p>Partenza: <b>{{$elem->orario_di_partenza}}</b></p>
                    <p>Arrivo: <b>{{$elem->orario_di_arrivo}}</b></p>
                    <p>Codice treno: <b>{{$elem->codice_treno}}</b></p>
                    <p>Numero della carrozza: <b>{{$elem->carrozze}}</b></p>
                    <?php if ( $elem->on_time == 1 ){  ?>
                        
                       <?php  echo '<p class="text-success"><b> In orario</b></p>' ?> 
                        
                    <?php }else{ ?> 
                 
                        <?php  echo '<p class="text-primary"><b> In ritardo</b></p>' ?> 
                    
                    <?php } ?>
                    <?php if ( $elem->cancellato == 1 ){  ?>
                        <?php  echo '<div class="alert alert-danger" role="alert">Cancellato</div>' ?>
                        <?php } ?>

                </div>
            </div>
                    
        
        @endforeach
    </div>
</div>