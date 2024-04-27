<?php


// Check if all required fields are set
if(isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    // Récupération des données du formulaire
    $the_name = $_POST['name'];
    $the_email = $_POST['email'];
    $the_subject = $_POST['subject'];
    $the_message = $_POST['message'];

    $the_name = "valide: ".$the_name;
    $the_email = "valide: ".$the_email;
    $the_subject = "valide: ".$the_subject;
    $the_message = "valide: ".$the_message;

    // Database connection details

    try {
        // Establishing a database connection
        $bdd = new \PDO(
            'mysql:host=' . servername . ';dbname=' . database,
            username,
            password
        );

        // Set PDO to throw exceptions on error
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparing the SQL query for insertion with placeholders
        $query = "INSERT INTO contact(name, email, sujet, content) VALUES (:name, :email, :sujet, :content)";
        $prep = $bdd->prepare($query);

        // Binding the form data to the query parameters
        $prep->bindValue(':name', $the_name, PDO::PARAM_STR);
        $prep->bindValue(':email', $the_email, PDO::PARAM_STR);
        $prep->bindValue(':sujet', $the_subject, PDO::PARAM_STR);
        $prep->bindValue(':content', $the_message, PDO::PARAM_STR);

        // Executing the query
        $prep->execute();

        // Displaying a confirmation message
        echo "Message sent successfully!";
    } catch (PDOException $e) {
        // Handling connection errors
        echo "Error!: " . $e->getMessage() . "<br>";
    }
} else {
    // Displaying an error message if required fields are missing
    echo "All fields are required.";
}

header("Location: ../index.html#contact");
exit();

?>

