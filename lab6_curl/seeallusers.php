<?php 
	// BingJiun Miu's company in data
	$curl = curl_init();
	$url = 'http://logandsign.josephmiu.com/seeuser.php';
	
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($curl);
	
	preg_match_all("!<td>[\s\S]*?</td>!",$result,$matches);
	
	$data = array_values($matches[0]);
	curl_close($curl);
	
	// Anmol's company in data2
	$curl = curl_init();
	$url = 'https://qpm.oik.mybluehost.me/myusers.php';
	
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	
	$result = curl_exec($curl);
	
	preg_match_all("!<td>[\s\S]*?</td>!",$result,$matches);
	
	$data2 = array_values($matches[0]);
	curl_close($curl);
	
	// Jeff's company in data3
	$curl = curl_init();
	$url = 'https://truewealth.000webhostapp.com/getusers.php';
	
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	
	$result = curl_exec($curl);
	
	preg_match_all("!<td>[\s\S]*?</td>!",$result,$matches);
	
	$data3 = array_values($matches[0]);
	curl_close($curl);
	
	// Phillip Nguyen's company in data4
	$curl = curl_init();
	$url = 'https://philliphnguyen.com/allUsers.php';
	
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	
	$result = curl_exec($curl);
	
	preg_match_all("!<td>[\s\S]*?</td>!",$result,$matches);
	
	$data4 = array_values($matches[0]);
	curl_close($curl);
	
	echo '<table width="70%" border="1" cellpadding="6" cellspacing="6">
		<tr>
			<th>ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Cellphone</th>
			<th>Homephone</th>
		</tr>';
	$count = 0;
	
	echo '<tr>
			<td>'."BingJiun Miu's Company".'</td>
		</tr>';
	for($i=0;$i<count($data);$i=$i+6,$count++){
		echo '<tr>
			<td>'.$count.$data[$i].$data[$i+1].$data[$i+2].$data[$i+3].$data[$i+4].$data[$i+5].'</td>
		</tr>';
	}
	echo '<tr>
			<td>'."Anmol's Company".'</td>
		</tr>';
	for($i=0;$i<count($data2);$i=$i+6,$count++){
		echo '<tr>
			<td>'.$count.$data2[$i].$data2[$i+1].$data2[$i+2].$data2[$i+3].$data2[$i+4].$data2[$i+5].'</td>
		</tr>';
	}
	echo '<tr>
			<td>'."Jeff's Company".'</td>
		</tr>';
	for($i=0;$i<count($data3);$i=$i+6,$count++){
		echo '<tr>
			<td>'.$count.$data3[$i].$data3[$i+1].$data3[$i+2].$data3[$i+3].$data3[$i+4].$data3[$i+5].'</td>
		</tr>';
	}
	echo '<tr>
			<td>'."Phillip Nguyen's Company".'</td>
		</tr>';
	for($i=0;$i<count($data4);$i=$i+6,$count++){
		echo '<tr>
			<td>'.$count.$data4[$i].$data4[$i+1].$data4[$i+2].$data4[$i+3].$data4[$i+4].$data4[$i+5].'</td>
		</tr>';
	}
	echo '</table>';