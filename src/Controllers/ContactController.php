<?php
namespace App\Controllers;

class ContactController extends Controller
{
    public function showContactPage() {
        require_once base_path('views/contact.php');
    }

    // send email function
     public function handleFormSubmission()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $adresseMail = $_POST["adresseMail"];
            $message = $_POST["message"];

            // Compose email message
            $to = "ahmadizahra897@gmail.com";
            $subject = "New Contact Form Submission";
            $headers = "From: $nom $prenom <$adresseMail>";
            $body = "Message:\n$message";

            // Send email
            if (mail($to, $subject, $body, $headers)) {
                echo "Email sent successfully!";
            } else {
                echo "Failed to send email. Please try again later.";
            }
        } else {
            // Handle invalid requests
            echo "Invalid request method.";
        }
    }
}