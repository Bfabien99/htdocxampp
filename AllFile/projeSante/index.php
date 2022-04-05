<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.infermedica.com/v3/diagnosis',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "sex": "male",
  "age": {
      "value": 30
  },
  "evidence": [
    {
      "id": "s_1193",
      "choice_id": "present"
    },
    {
      "id": "s_488",
      "choice_id": "present"
    },
    {
      "id": "s_418",
      "choice_id": "present"
    }
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'App-Id: d423892e',
    'App-Key: 10676238d756762e2e7ce7bd3bd5f302',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
