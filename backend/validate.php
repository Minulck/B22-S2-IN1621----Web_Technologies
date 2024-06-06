<?php

function validateFormData($formData)
{
    $errors = [];

    // Validate each form field
    if (empty($formData['company'])) {
        $errors['company'] = 'Company name is required.';
    }
    if (empty($formData['contact-name'])) {
        $errors['contact-name'] = 'Contact name is required.';
    }

    return $errors;
}

?>
