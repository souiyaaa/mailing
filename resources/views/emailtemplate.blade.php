<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pendaftaran Berhasil</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:30px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.05); overflow:hidden;">
          
          <!-- Header -->
          <tr>
            <td align="center" style="padding:30px 20px 20px 20px;">
              <div style="width:64px; height:64px; background-color:#e6f4ea; color:#16a34a; border-radius:50%; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
                <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' style="color:#16a34a;">
                  <path d='M9 12l2 2l4-4'></path>
                  <circle cx='12' cy='12' r='9' >
                  
                  </circle>
                </svg>
              </div>
              <h1 style="font-size:24px; font-weight:bold; color:#111827; margin:0;">Pendaftaran Berhasil!</h1>
              <p style="font-size:14px; color:#6b7280; margin-top:6px;">Akun kamu sudah terdaftar di sistem kami.</p>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td align="center" style="padding:20px 30px 0 30px;">
              <p style="font-size:16px; color:#374151; margin:8px 0;">
                <strong>Full name:</strong> <span style="color:#1e40af;">{{ $name }}</span>
              </p>
              <p style="font-size:16px; color:#374151; margin:8px 0;">
                <strong>Email:</strong> <span style="color:#1e40af;">{{ $email }}</span>
              </p>
              <p style="font-size:16px; color:#374151; margin:8px 0;">
                <strong>Birthdate:</strong> <span style="color:#1e40af;">{{ $birthdate }}</span>
              </p>
              <p style="font-size:16px; color:#111827; font-weight:bold; margin:20px 0 10px 0;">
                Anda telah bergabung pada kelas <span style="color:#2563eb;">Cloud Computing 2025</span>
              </p>
              <p style="font-size:14px; color:#4b5563; line-height:1.6; margin:0 0 24px 0;">
                Terima kasih telah mendaftar di aplikasi kami.<br>
                Silakan klik tombol di bawah ini untuk mengaktifkan akunmu.
              </p>
            </td>
          </tr>

          <!-- Button -->
          <tr>
            <td align="center" style="padding:20px;">
              <a href="#" 
                 style="background:linear-gradient(90deg, #4f46e5, #3b82f6); color:#ffffff; text-decoration:none; 
                        padding:12px 28px; border-radius:8px; display:inline-block; font-size:15px; 
                        font-weight:bold; letter-spacing:0.3px;">
                Aktifkan Akun
              </a>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td align="center" style="padding:30px 20px 20px 20px; background-color:#f9fafb; border-top:1px solid #e5e7eb;">
              <p style="font-size:12px; color:#9ca3af; margin:0;">
                Jika kamu tidak mendaftar, abaikan email ini.<br>
                © {{ date('Y') }} Surya. Semua Hak Dilindungi.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
