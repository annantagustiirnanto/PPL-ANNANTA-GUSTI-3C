<?php
// File: Validator.php

function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

function ValidateName($name) {
    if (!isset($name) || trim($name) === '') {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    if (!preg_match('/^[A-Za-z\s]+$/', $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    return true;
}