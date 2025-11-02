<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Form Input dengan Validasi AJAX</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error"></span><br>

        <input type="submit" value="Submit">
    </form>
    
    <div id="ajax-result"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); 
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val(); // Ambil nilai password
            var valid = true;

            // --- 1. VALIDASI SISI KLIEN (JavaScript/jQuery) ---

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
            }

            // Validasi Password (Baru)
            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                valid = false;
            } else if (password.length < 8) { // Cek minimal 8 karakter
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            }
            else {
                $("#password-error").text("");
            }


            // --- 2. PENGIRIMAN AJAX JIKA VALID ---
            if (valid) {
                var formData = $(this).serialize();
                
                $.ajax({
                    url: "proses_validasi.php", 
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#ajax-result").html(response);
                        
                        if (response.includes("Data Berhasil Dikirim")) {
                            $("#myForm")[0].reset();
                        }
                    },
                    error: function() {
                        $("#ajax-result").html('<h2 class="error">Koneksi Gagal</h2>');
                    }
                });
            } else {
                $("#ajax-result").html('<h2>Silakan perbaiki kesalahan di formulir.</h2>');
            }
        });
    });
    </script>
</body>
</html>