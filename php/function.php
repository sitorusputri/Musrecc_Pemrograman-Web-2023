<?php 


// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "musrecc");


function registrasi($data){
    global $conn;

    $signUpUsername = strtolower(stripslashes($data["signup-username"]));
    $signUpPassword = mysqli_real_escape_string($conn, $data["signup-password"]);
    $signUpPassword2 = mysqli_real_escape_string($conn, $data["signup-cpassword"]);

    // cek usernama sudah ada ato belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$signUpUsername'");

    if( mysqli_fetch_assoc($result)) {
        echo    "<script>
                    alert('username sudah terdaftar!')";
                "</script>";
        return false;
    }

    // cek konfirmasi password

    if ( $signUpPassword !== $signUpPassword2){
        echo    "<script>
                    alert('konfirmasi password tidak sesuai!:');
                </script>";
        return false;
    }
    // enskripsi password
    $signUpPassword = password_hash($signUpPassword, PASSWORD_DEFAULT);

    //  tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$signUpUsername', '$signUpPassword')");

    return mysqli_affected_rows($conn);
}

?>