 <?php
//  if ($found == 1) {
//                     // Encontrou um usuário válido
//                     $userData = $result[0];
                    
//                     // Criar token JWT manualmente
//                     $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
//                     $payload = json_encode([
//                         'userId' => $userData['id'],
//                         'email' => $userData['email'],
//                         'name' => $userData['name'],
//                         'phot_url' => $userData['phot_url'],
//                         'exp' => time() + 432000,  // Expira em 5 dias
//                     ]);
    
//                     $secretKey = 'azhusgame';
//                     $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
//                     $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));
//                     $signature = hash_hmac('sha256', $base64UrlHeader . '.' . $base64UrlPayload, $secretKey, true);
//                     $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));
    
//                     $token = $base64UrlHeader . '.' . $base64UrlPayload . '.' . $base64UrlSignature;
    
//                     // Armazenar o token no localStorage (use esse código no seu JavaScript)
//                     echo "<script>
//                             localStorage.setItem('jwtToken', '" . $token . "');
//                           </script>";
//                 }