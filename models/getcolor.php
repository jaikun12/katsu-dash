<?php
			// include("php/dbconnect.php");

			function getColor($db,$province){
				$connection = $db;
				$query = "SELECT * FROM reports_incidents_table WHERE child_province = '$province';";
				$getfields = mysqli_query($connection, $query);
				$get_count = mysqli_num_rows($getfields);

				$query2 = "SELECT * FROM reports_incidents_table;";
				$getfields2 = mysqli_query($connection, $query2);
				$get_total = mysqli_num_rows($getfields2);

				$share_pct = $get_count/$get_total;

				if($share_pct > 0 && $share_pct <= 0.25){
					$color = '#2b9b41';
				}
				else if($share_pct > 0.25   && $share_pct <= 0.50){
					$color = '#fcf844';
				}
				else if($share_pct > 0.50   && $share_pct <= 0.75){
					$color = '#ffb407';
				}
				else if($share_pct > 0.75   && $share_pct <= 1){
					$color = '#db020d';
				}
				else if($share_pct = 0){
					$color = 'white';
				}
				else{
					$color = 'white';
				}

				return $color;
			}

			
			
			
			$cavite = getColor($connection,'cavite');
			$suldelsur = getColor($connection, 'suldelsur');
			$tarlac = getColor($connection,'tarlac');
			$tawitawi = getColor($connection,'tawitawi');
			$zambales = getColor($connection,'zambales');
			$zamboanga_del_norte = getColor($connection,'zamboanga-del-norte');
			$zamboanga_sibugay = getColor($connection,'zamboanga-sibugay');
			$abra = getColor($connection,'abra');
			$agusan_del_norte = getColor($connection,'agusan-del-norte');
			$agusan_del_sur = getColor($connection,'agusan-del-sur');
			$aklan = getColor($connection,'aklan');
			$albay = getColor($connection,'albay');
			$antique = getColor($connection,'antique');
			$bataan = getColor($connection,'bataan');
			$batanes = getColor($connection,'batanes');
			$batangas = getColor($connection,'batangas');
			$benguet = getColor($connection,'benguet');
			$biliran = getColor($connection,'biliran');
			$bohol = getColor($connection,'bohol');
			$bukidnon = getColor($connection,'bukidnon');
			$bulacan = getColor($connection,'bulacan');
			$camarines_sur = getColor($connection,'camarines-sur');
			$camiguin = getColor($connection,'camiguin');
			$capiz = getColor($connection,'capiz');
			$catanduanes = getColor($connection,'catanduanes');
			$cebu = getColor($connection,'cebu');
			$compostela_valley = getColor($connection,'compostela-valley');
			$davao_del_norte = getColor($connection,'davao-del-norte');
			$davao_del_sur = getColor($connection,'davao-del-sur');
			$davao_oriental = getColor($connection,'davao-oriental');
			$dinagat_islands = getColor($connection,'dinagat-islands');
			$eastern_samar = getColor($connection,'eastern-samar');
			$guimaras = getColor($connection,'guimaras');
			$ifugao = getColor($connection,'ifugao');
			$iloilo = getColor($connection,'iloilo');
			$la_union = getColor($connection,'la-union');
			$laguna = getColor($connection,'laguna');
			$lanao_del_norte = getColor($connection,'lanao-del-norte');
			$lanao_del_sur = getColor($connection,'lanao-del-sur');
			$leyte = getColor($connection,'leyte');
			$maguindanao = getColor($connection,'maguindanao');
			$marinduque = getColor($connection,'marinduque');
			$masbate = getColor($connection,'masbate');
			$misamis_oriental = getColor($connection,'misamis-oriental');
			$mountain_province = getColor($connection,'mountain-province');
			$negros_occidental = getColor($connection,'negros-occidental');
			$negros_oriental = getColor($connection,'negros-oriental');
			$cotobato = getColor($connection,'cotobato');
			$northern_samar = getColor($connection,'northern-samar');
			$nueva_ecija = getColor($connection,'nueva-ecija');
			$nueva_viscaya = getColor($connection,'nueva-viscaya');
			$mindoro_occidental = getColor($connection,'mindoro-occidental');
			$mindoro_oriental = getColor($connection,'mindoro-oriental');
			$palawan = getColor($connection,'palawan');
			$pampanga = getColor($connection,'pampanga');
			$pangasinan = getColor($connection,'pangasinan');
			$quezon = getColor($connection,'quezon');
			$quirino = getColor($connection,'quirino');
			$rizal = getColor($connection,'rizal');
			$romblon = getColor($connection,'romblon');
			$samar = getColor($connection,'samar');
			$sarangani = getColor($connection,'sarangani');
			$siquijor = getColor($connection,'siquijor');
			$sorsogon = getColor($connection,'sorsogon');
			$south_cotobato = getColor($connection,'south-cotobato');
			$southern_leyte = getColor($connection,'southern-leyte');
			$sultan_kudarat = getColor($connection,'sultan-kudarat');
			$sulu = getColor($connection,'sulu');
			$surigao_del_norte = getColor($connection,'surigao-del-norte');
			$basilan = getColor($connection,'basilan');
			$zamboanga_del_sur = getColor($connection,'zamboanga-del-sur');
			$isabela = getColor($connection,'isabela');
			$kalinga = getColor($connection,'kalinga');
			$cagayan = getColor($connection,'cagayan');
			$camarines_norte = getColor($connection,'camarines-norte');
			$apayao = getColor($connection,'apayao');
			$aurora = getColor($connection,'aurora');
			$ilocos_norte = getColor($connection,'ilocos-norte');
			$ilocos_sur = getColor($connection,'ilocos-sur');
			$metro_manila = getColor($connection,'metro-manila');
			$misamis_occidental = getColor($connection,'misamis-occidental');
			
		?>