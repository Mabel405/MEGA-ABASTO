<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Inicio de Sesion del Sistema" />
        <meta name="author" content="Mabel Manturano" />
        <title>Login - Sistema Administrativo</title>
        
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <style>
            :root {
                --primary-color: #4361ee;
                --primary-dark: #3a56d4;
                --secondary-color: #7209b7;
                --accent-color: #f72585;
                --light-color: #f8f9fa;
                --dark-color: #212529;
                --gradient-primary: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
                --gradient-secondary: linear-gradient(135deg, #7209b7 0%, #560bad 100%);
                --shadow-lg: 0 15px 35px rgba(0, 0, 0, 0.1);
                --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
                --radius-lg: 20px;
                --radius-sm: 12px;
            }
            
            * {
                font-family: 'Poppins', sans-serif;
            }
            
            body {
                background: var(--gradient-primary);
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 20px;
            }
            
            .login-container {
                max-width: 480px;
                margin: 0 auto;
                width: 100%;
            }
            
            .login-card {
                background: white;
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-lg);
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            
            .login-card:hover {
                transform: translateY(-5px);
                box-shadow: var(--shadow-hover);
            }
            
            .card-header {
                background: var(--gradient-primary);
                padding: 40px 30px 30px;
                text-align: center;
                border-bottom: 5px solid var(--accent-color);
            }
            
            .card-header h2 {
                color: white;
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-size: 2.5rem;
                margin-bottom: 10px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }
            
            .card-header p {
                color: rgba(255, 255, 255, 0.85);
                font-size: 1.1rem;
                margin: 0;
            }
            
            .card-body {
                padding: 40px;
            }
            
            .form-label {
                font-weight: 600;
                color: var(--dark-color);
                margin-bottom: 10px;
                font-size: 1.1rem;
                display: flex;
                align-items: center;
            }
            
            .form-label i {
                margin-right: 10px;
                color: var(--primary-color);
                font-size: 1.2rem;
            }
            
            .form-control {
                padding: 16px 20px;
                border: 2px solid #e0e0e0;
                border-radius: var(--radius-sm);
                font-size: 1.1rem;
                transition: all 0.3s ease;
                background-color: #f9f9f9;
            }
            
            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
                background-color: white;
            }
            
            .form-floating>.form-control {
                height: calc(3.5rem + 6px);
                line-height: 1.25;
            }
            
            .form-floating>label {
                padding: 1rem 1.25rem;
                font-size: 1.1rem;
            }
            
            .input-group {
                border-radius: var(--radius-sm);
                overflow: hidden;
            }
            
            .password-toggle {
                background-color: white;
                border: 2px solid #e0e0e0;
                border-left: none;
                color: #6c757d;
                padding: 0 20px;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .password-toggle:hover {
                background-color: #f8f9fa;
                color: var(--primary-color);
            }
            
            .password-toggle:focus {
                box-shadow: none;
                outline: none;
            }
            
            .btn-login {
                background: var(--gradient-primary);
                border: none;
                color: white;
                padding: 18px 30px;
                font-size: 1.2rem;
                font-weight: 600;
                border-radius: var(--radius-sm);
                transition: all 0.3s ease;
                width: 100%;
                letter-spacing: 0.5px;
                text-transform: uppercase;
            }
            
            .btn-login:hover {
                background: var(--gradient-secondary);
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(114, 9, 183, 0.3);
                color: white;
            }
            
            .btn-login:active {
                transform: translateY(-1px);
            }
            
            .alert {
                border-radius: var(--radius-sm);
                padding: 16px 20px;
                border: none;
                font-size: 1rem;
                margin-bottom: 25px;
            }
            
            .alert-danger {
                background-color: #ffebee;
                color: #c62828;
                border-left: 5px solid #ef5350;
            }
            
            .footer {
                margin-top: 40px;
                text-align: center;
                color: rgba(255, 255, 255, 0.85);
                font-size: 0.9rem;
            }
            
            .footer a {
                color: white;
                text-decoration: none;
                transition: color 0.3s ease;
            }
            
            .footer a:hover {
                color: var(--accent-color);
                text-decoration: underline;
            }
            
            .logo-container {
                text-align: center;
                margin-bottom: 30px;
            }
            
            .logo {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 80px;
                height: 80px;
                background: white;
                border-radius: 50%;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                margin-bottom: 15px;
            }
            
            .logo i {
                font-size: 2.5rem;
                background: var(--gradient-primary);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            
            .brand-name {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                color: white;
                font-size: 1.5rem;
                letter-spacing: 1px;
            }
            
            /* Responsive */
            @media (max-width: 576px) {
                .card-body {
                    padding: 30px 25px;
                }
                
                .card-header {
                    padding: 30px 25px 25px;
                }
                
                .card-header h2 {
                    font-size: 2rem;
                }
                
                .btn-login {
                    padding: 16px 25px;
                    font-size: 1.1rem;
                }
            }
            
            @media (max-height: 700px) {
                body {
                    padding-top: 20px;
                    padding-bottom: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <!-- Logo y marca -->
            <div class="logo-container">
                <div class="logo">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="brand-name">Sistema Administrativo</div>
            </div>
            
            <!-- Tarjeta de login -->
            <div class="login-card">
                <div class="card-header">
                    <h2>ACCESO AL SISTEMA</h2>
                    <p>Ingresa tus credenciales para continuar</p>
                </div>
                
                <div class="card-body">
                    @if ($errors->any())
                    @foreach ($errors->all() as $item)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$item}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif
                    
                    <form action="/login" method="POST">
                        @csrf
                        
                        <!-- Campo de correo -->
                        <div class="mb-4">
                            <label for="inputEmail" class="form-label">
                                <i class="fas fa-envelope"></i>Correo electrónico
                            </label>
                            <div class="input-group">
                                <input type="email" 
                                       class="form-control" 
                                       name="email" 
                                       id="inputEmail" 
                                       placeholder="nombre@ejemplo.com"
                                       required>
                            </div>
                        </div>
                        
                        <!-- Campo de contraseña -->
                        <div class="mb-5">
                            <label for="inputPassword" class="form-label">
                                <i class="fas fa-key"></i>Contraseña
                            </label>
                            <div class="input-group">
                                <input type="password" 
                                       class="form-control" 
                                       name="password" 
                                       id="inputPassword" 
                                       placeholder="Ingresa tu contraseña"
                                       required>
                                <button class="password-toggle" type="button" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Botón de inicio de sesión -->
                        <div class="d-grid">
                            <button class="btn-login" type="submit">
                                <i class="fas fa-sign-in-alt me-2"></i>INICIAR SESIÓN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const togglePassword = document.getElementById('togglePassword');
                const passwordInput = document.getElementById('inputPassword');
                const passwordIcon = togglePassword.querySelector('i');
                
                // Función para alternar visibilidad de contraseña
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Cambiar icono
                    if (type === 'password') {
                        passwordIcon.classList.remove('fa-eye-slash');
                        passwordIcon.classList.add('fa-eye');
                    } else {
                        passwordIcon.classList.remove('fa-eye');
                        passwordIcon.classList.add('fa-eye-slash');
                    }
                });
                
                // Efecto de enfoque en campos de entrada
                const inputs = document.querySelectorAll('.form-control');
                inputs.forEach(input => {
                    // Agregar efecto al enfocar
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('focused');
                    });
                    
                    // Remover efecto al perder el foco
                    input.addEventListener('blur', function() {
                        if (this.value === '') {
                            this.parentElement.classList.remove('focused');
                        }
                    });
                });
                
                // Efecto de validación para campos requeridos
                const form = document.querySelector('form');
                form.addEventListener('submit', function(e) {
                    let isValid = true;
                    inputs.forEach(input => {
                        if (input.hasAttribute('required') && input.value.trim() === '') {
                            input.classList.add('is-invalid');
                            isValid = false;
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                    }
                });
            });
        </script>
    </body>
</html>