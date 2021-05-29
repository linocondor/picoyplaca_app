<?php

namespace App\Controllers;

class PicoyPlaca extends BaseController
{
	public function index()
	{
		return view('PicoyPlaca/index');
	}

	public function consulta()
	{
		$datosConsulta = $this->request->getPost();
		//$model = new \App\Models\PicoyplacaModel;
		
		
		if ($this->request->getPost('fecha') !== "" && $this->request->getPost('hora') !== "" && $this->request->getPost('placa') !== "" ){

			
			$numeroDiaSemana = $this->chequeoFecha($datosConsulta['fecha']);
			$diaNoCircula = $this->chequeoPlaca($datosConsulta['placa']);
			
			if ($diaNoCircula['numero'] !== '0'){
			
				if ($diaNoCircula['numero'] !== $numeroDiaSemana['numero']){ //Dia no es igual al dia del no circula


					return view('PicoyPlaca/resultado_puede', [

						'diaNoCircula' => $diaNoCircula['dia'],
						'numeroDiaSemana' => $numeroDiaSemana['dia'],
						'hora' => $datosConsulta['hora'],
						'fecha' => $datosConsulta['fecha']

					]);

				} else if( $datosConsulta['hora'] >= '07:00' && $datosConsulta['hora'] <= '09:30'  ) {  //esta en la hora de pico y placa de la mañana
					
					return view('PicoyPlaca/resultado_no_puede', [

						'diaNoCircula' => $diaNoCircula['dia'],
						'numeroDiaSemana' => $numeroDiaSemana['dia'],
						'hora' => $datosConsulta['hora'],
						'fecha' => $datosConsulta['fecha']

					]);
					
					
				} else if( $datosConsulta['hora'] >= '16:00' && $datosConsulta['hora'] <= '19:30'  ) { //esta en la hora de pico y placa de la tarde

					return view('PicoyPlaca/resultado_no_puede', [

						'diaNoCircula' => $diaNoCircula['dia'],
						'numeroDiaSemana' => $numeroDiaSemana['dia'],
						'hora' => $datosConsulta['hora'],
						'fecha' => $datosConsulta['fecha']

					]);
					


				} else { //no esta en niguna hora de restriccion

					return view('PicoyPlaca/resultado_puede', [

						'diaNoCircula' => $diaNoCircula['dia'],
						'numeroDiaSemana' => $numeroDiaSemana['dia'],
						'hora' => $datosConsulta['hora'],
						'fecha' => $datosConsulta['fecha']

					]);

				}

			} else { //el ultimo valor de la placa no es valido

				return redirect()->back()                            
								->withInput()
								->with('warning', 'Porfavor ingrese un número de placa válido');
								
			}

			

		} else { //no ha ingresado datos

			return redirect()->back()                            
                            ->withInput()
                            ->with('warning', 'Porfavor ingrese los datos para hacer la consulta');
							
		}
		

		return view('PicoyPlaca/resultadoconsulta');
	}

	private function chequeoPlaca($placa)
	{
		$placa = substr($placa, -1); //Obtener valor del ultimo
		
		$diaNoCircula;
		
		if ($placa === '1' || $placa === '2'){

			return $diaNoCircula = [
									'dia' => 'Lunes',
									'numero' => '1'
			];

		} else if ($placa === '3' || $placa === '4'){

			return $diaNoCircula = [
									'dia' => 'Martes',
									'numero' => '2'
			];

		} else if ($placa === '5' || $placa === '6'){

			return $diaNoCircula = [
									'dia' => 'Miércoles',
									'numero' => '3'
			];

		} else if ($placa === '7' || $placa === '8'){

			return $diaNoCircula = [
									'dia' => 'Jueves',
									'numero' => '4'
			];

		} else if ($placa === '9' || $placa === '0'){

			return $diaNoCircula = [
									'dia' => 'Viernes',
									'numero' => '5'
			];

		

		} else {

			return $diaNoCircula = [
									'dia' => 'NINGUNO',
									'numero' => '0'
			];

		}
	}

	private function chequeoFecha($fecha)
	{
		
		$unixTimestamp = strtotime($fecha); //convertir a unix timestamp

		$dia = date("N", $unixTimestamp);

		if ($dia === '1'){

			$dia = 'Lunes';
			

		} else if ($dia === '2'){

			$dia = 'Martes';

		} else if ($dia === '3'){

			$dia = 'Miércoles';

		} else if ($dia === '4'){

			$dia = 'Jueves';
			
		} else if ($dia === '5'){

			$dia = 'Viernes';
			
		} else if ($dia === '6'){

			$dia = 'Sábado';
			
		} else if ($dia === '7'){

			$dia = 'Domingo';
			
		}
		
		$numeroDiaSemana = [
							'numero' => date("N", $unixTimestamp),
							'dia' => $dia
						
						];

		

		

		return $numeroDiaSemana;
		
	}



}
