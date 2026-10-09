<?php
// File: test_name.php
require_once 'Validator.php';

function jalankanTest($label, $input, $harusValid) {
    try {
        ValidateName($input);
        $valid = true;
        $pesan = "";
    } catch (InvalidArgumentException $e) {
        $valid = false;
        $pesan = $e->getMessage();
    }

    if ($valid === $harusValid) {
        echo "PASS: $label " . ($valid ? "diterima" : "ditolak ($pesan)") . "\n";
    } else {
        echo "FAIL: $label\n";
    }
}

// Test case sesuai soal
jalankanTest("Nama lengkap 'Annanta Gusti Irnanto'", "Annanta Gusti Irnanto", true);
jalankanTest("Nama + angka 'Annanta232'", "Annanta232", false);
jalankanTest("Input kosong ''", "", false);