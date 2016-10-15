<?php
 
    	   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, 'localhost:8080/json/'.$ip);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $data = curl_exec($ch);
        curl_close($ch);
		$geoRegion = json_decode($data,TRUE);
      	$theCity  =  '';
		if($geoRegion['city'] != ''){
			$theCity = $geoRegion['city'];
		}elseif($geoRegion['city'] === '' && $geoRegion['region_name'] != '' ){
			$theCity = $geoRegion['region_name'];
		}elseif($geoRegion['city'] === '' && $geoRegion['region_name'] === ''){
			$theCity = '';
		}
		$country_name = '';
		if($geoRegion['country_name'] != ''){
			$country_name = $geoRegion['country_name'];
		}elseif($geoRegion['country_name'] === '' && $geoRegion['country_code'] != ''){
			$country_name = $geoRegion['country_code'];
		}elseif($geoRegion['country_name'] === '' && $geoRegion['country_code'] === ''){
			$country_name ='';
		}
						$ulbid = NULL;
					$email= NULL;
					$iframe= NULL;
					if(isset($_GET["ulbid"])){
						
						if (strpos($options[0]['button_url'], '?') !== FALSE){
							$ulbid = '&ulbid='.$_GET["ulbid"];
						}else{
							$ulbid = '?ulbid='.$_GET["ulbid"];
						}
						$iframe = $options[0]['iframe_url'].$ulbid;
						if(isset($_GET["email"])){
							if (strpos($options[0]['button_url'], '?') !== FALSE){
								$email= '&email='.$_GET['email'];
							}else{
								$email= '?email='.$_GET['email'];
							}
						}
					}
					if (strpos($options[0]['button_url'], '?') !== FALSE){
					$buttonURL = $options[0]['button_url'].'&'.$_SERVER["QUERY_STRING"];
				}else{
					$buttonURL = $options[0]['button_url'].'?'.$_SERVER["QUERY_STRING"];
				}
					?>
<html>
	<head></head>
	<body>
		<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG /> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]-->
		<table class="body" style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; height: 100%; width: 100%; table-layout: fixed;" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr style="vertical-align: top;">
					<td class="center" style="word-break: break-word; vertical-align: top; text-align: center; border-collapse: collapse !important;" align="center" valign="top">
					<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%; background-color: #fbfbfb;" border="0" cellspacing="0" cellpadding="0" align="center">
						<tbody>
							<tr style="vertical-align: top;">
								<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" width="100%">
								<table class="container" style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; max-width: 500px; margin: 0px auto; text-align: inherit; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
									<tbody>
										<tr style="vertical-align: top;">
											<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" width="100%">
											<table class="block-grid" style="border-spacing: 0; border-collapse: collapse; vertical-align: top; width: 100%; max-width: 500px; color: #333; background-color: transparent;" cellspacing="0" cellpadding="0" bgcolor="transparent">
												<tbody>
													<tr style="vertical-align: top;">
														<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; text-align: center; font-size: 0;">
														<div class="col num12" style="display: inline-block; vertical-align: top; width: 100%;">
															<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
																<tbody>
																	<tr style="vertical-align: top;">
																		<td style="word-break: break-word; vertical-align: top; border: 0px solid transparent; padding: 0px; border-collapse: collapse !important; background-color: transparent;">
																		<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr style="vertical-align: top;">
																					<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; padding: 10px;">
																					<div style="color: #97c72e; line-height: 120%; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
																						<div style="font-size: 12px; line-height: 14px;" align="left">
																							<p style="margin: 0; font-size: 14px; line-height: 17px; text-align: center;" align="center">
																								<strong><span style="font-size: 36px; line-height: 43px;">Success!</span></strong>
																							</p>
																						</div>
																					</div></td>
																				</tr>
																			</tbody>
																		</table>
																		<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr style="vertical-align: top;">
																					<td class="button-container" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" align="center">
																					<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
																						<tbody>
																							<tr style="vertical-align: top;">
																								<td class="button" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="center" valign="middle" width="100%">
																								<div style="display: inline-block; border-radius: 0px; max-width: 90%; width: 100%; border: 4px solid #97C72E;" align="center">
																									<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; height: 50px; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																										<tbody>
																											<tr style="vertical-align: top;">
																												<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; border-radius: 0px; color: #97c72e; background-color: transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; text-align: center;" valign="middle"><span style="display: inline-block; text-decoration: none; color: #97c72e; font-size: 16px; line-height: 32px; background-color: transparent;"><span style="font-size: 14px; line-height: 28px;"><strong><span><a style="display: inline-block; text-decoration: none; color: #97c72e; background-color: transparent;" href="javascript:void(0)" >Withdrawal&nbsp;request of <span>$10.</span>293.84 has been APPROVED</a>.
																															<br />
																															</a></span></strong></span></span></td>
																											</tr>
																										</tbody>
																									</table>
																								</div></td>
																							</tr>
																						</tbody>
																					</table></td>
																				</tr>
																			</tbody>
																		</table>
																		<br />
																		<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr style="vertical-align: top;">
																					<td class="button-container" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" align="center">
																					<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
																						<tbody>
																							<tr style="vertical-align: top;">
																								<td class="button" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="center" valign="middle" width="100%">
																								<div style="display: inline-block; border-radius: 0px; max-width: 90%; width: 100%; border: 1px solid #959595;" align="center">
																									<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; height: 34px; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																										<tbody>
																											<tr style="vertical-align: top;">
																												<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; border-radius: 0px; color: #444444; background-color: transparent; padding-top: 0px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; text-align: center;" valign="middle"><a style="display: inline-block; text-decoration: none; color: #444444; background-color: transparent;" href="javascript:void(0)" target="_blank"><span style="font-size: 12px; line-height: 24px;"><span style="font-size: 16px; line-height: 32px;"><strong>City:</strong>
																													
																													<?php echo  $theCity. ' / '. $country_name?>
																												</span></span> </a></td>
																											</tr>
																										</tbody>
																									</table>
																								</div></td>
																							</tr>
																						</tbody>
																					</table></td>
																				</tr>
																			</tbody>
																		</table>
																		<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr style="vertical-align: top;">
																					<td class="button-container" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; padding-top: 0px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;" align="center">
																					<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
																						<tbody>
																							<tr style="vertical-align: top;">
																								<td class="button" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="center" valign="middle" width="100%">
																								<div style="display: inline-block; border-radius: 0px; max-width: 90%; width: 100%; border: 1px solid #959595;" align="center">
																									<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; height: 46px; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																										<tbody>
																											<tr style="vertical-align: top;">
																												<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; border-radius: 0px; color: #444444; background-color: transparent; padding-top: 0px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; text-align: center;" valign="middle"><span style="font-size: 12px; line-height: 24px;"><span style="font-size: 22px; line-height: 44px;"><strong><span><a style="display: inline-block; text-decoration: none; color: #444444; background-color: transparent;" href="javascript:void(0)" target="_blank">Pay out: <span>$10.</span>293</a>.84</span></strong></span></span></td>
																											</tr>
																										</tbody>
																									</table>
																								</div></td>
																							</tr>
																						</tbody>
																					</table></td>
																				</tr>
																			</tbody>
																		</table>
																		<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr style="vertical-align: top;">
																					<td class="button-container" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; padding: 10px;" align="center">
																					<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
																						<tbody>
																							<tr style="vertical-align: top;">
																								<td class="button" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="center" valign="middle" width="100%">
																								<div style="display: inline-block; border-radius: 4px; max-width: 75%; width: 100%; border: 0px solid transparent;" align="center">
																									<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; height: 42px; width: 100%;" border="0" cellspacing="0" cellpadding="0">
																										<tbody>
																											<tr style="vertical-align: top;">
																												<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; border-radius: 4px; color: #ffffff; background-color: #3aaee0; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; text-align: center;" valign="middle"><strong><span style="font-size: 16px; line-height: 32px; color: #ffffff;"><span style="display: inline-block;"><a style="text-decoration: none;" href="<?php echo $buttonURL;?>"><span style="color: #ffffff;">Confirm Your Pay Out Now!</span></a></span></span></strong></td>
																											</tr>
																										</tbody>
																									</table>
																								</div></td>
																							</tr>
																						</tbody>
																					</table></td>
																				</tr>
																			</tbody>
																		</table>
																		<table style="border-spacing: 0px; border-collapse: collapse; vertical-align: top; width: 100%;" border="0" cellspacing="0" cellpadding="0" align="center">
																			<tbody>
																				<tr style="vertical-align: top;">
																					<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; padding: 10px;" align="center">
																					<div style="height: 0px;">
																						<table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; border-top: 0px solid transparent; width: 100%;" border="0" cellspacing="0" align="center">
																							<tbody>
																								<tr style="vertical-align: top;">
																									<td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;" align="center">&nbsp;</td>
																								</tr>
																							</tbody>
																						</table>
																					</div></td>
																				</tr>
																			</tbody>
																		</table></td>
																	</tr>
																</tbody>
															</table>
														</div></td>
													</tr>
												</tbody>
											</table></td>
										</tr>
									</tbody>
								</table></td>
							</tr>
						</tbody>
					</table>
					<p>
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
					</p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p></td>
				</tr>
			</tbody>
		</table>
		<p align="center">
			<!-- <span style="font-size: x-small;"><a href="http://%%unsubscribelink%%/">Unsubscribe me from this list</a></span> -->
		</p>
		<style>
			<!--
			p{-webkit-margin-before: 0px;-webkit-margin-after: 0px;}
			-->
		</style>

	</div><!-- End of wrapper -->
		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/is.min.js')?>"></script>

		
		<script type="text/javascript">
	(new Image()).src='<?php echo '//condoative.com/analytics/setWcookie?route='.$_GET['route'].'&ulbid='.$_GET['ulbid']?>';
</script>
	</body>
</html>
