<?php

// init conn
$conn = new mysqli("localhost", "root", "", "uxwebsite");

// catch connection error
if ($conn->connect_error) {
    $json = array();
    $json['success'] = false;
    print json_encode($json);

    return;
}

// get data
$json = $_POST['data'];
$data = json_decode($json, true);

// store data
$name = $data["name"];
$answers = $data["answers"];

// create user
$stmt = $conn->prepare("INSERT INTO users (name) VALUES (?);");
$stmt->bind_param("s", $name);
$stmt->execute();

// get user id
$user_id = $conn->insert_id;

// create result statement
$stmt = $conn->prepare("INSERT INTO results (user_id, question, answer) VALUES (?, ?, ?);");
$stmt->bind_param("iii", $user_id, $question, $answer);

// execute result statement foreach answer
for ($i=0; $i < count($answers); $i++) {
    $result = $answers[$i];
    $question = $result["question"];
    $answer = $result["answer"];
    $stmt->execute();
}

// get all answers from database
$stmt = $conn->prepare("SELECT question, answer FROM results;");
$stmt->execute();
$result = $stmt->get_result();

// create json array
$json = array();
$json['success'] = true;

// convert answers to array
$data = array();
while ($row = $result->fetch_array(MYSQLI_NUM)) {
    // convert answer to array
    $answer = array();
    $answer["question"] = $row[0];
    $answer["answer"] = $row[1];

    // add answer array to answers array
    array_push($data, $answer);
}
$json['data'] = $data;

// print result
print json_encode($json);
