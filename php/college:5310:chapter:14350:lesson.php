<?php

function getSurveyResults($db)
{
    $sql = "SELECT 
                surveys.*, 
                COUNT(survey_votes.id) AS votes_count,
                SUM(survey_votes.choice) AS votes_sum
            FROM surveys
            JOIN survey_votes ON surveys.id = survey_votes.survey_id
            GROUP BY surveys.id
            ORDER BY surveys.created_at DESC";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
}

$host = "localhost";
$username = "root";
$password = "";
$dbname = "survey";

try {
    $db = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

$template_path = "template.php";
if (file_exists($template_path)) {
    include $template_path;
}
