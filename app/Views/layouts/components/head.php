<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?= $this->renderSection('title') ?> | Sistema de Facturación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css">

    <!-- Bootstrap Icons & FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Bootstrap 5 CSS (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- AdminLTE v4 CSS (Local) -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css') ?>">

    <!-- DataTables Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- Tema Vibrante y Colorido (Gradients & Vivid Colors) -->
    <style>
        :root {
            /* Degradados de Color */
            --gradient-primary: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%); /* Violeta / Índigo */
            --gradient-success: linear-gradient(135deg, #10b981 0%, #059669 100%); /* Verde Esmeralda */
            --gradient-info: linear-gradient(135deg, #06b6d4 0%, #0284c7 100%);    /* Cían / Azul */
            --gradient-warning: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%); /* Naranja / Ámbar */
            --gradient-danger: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%);  /* Rosa / Rojo Vibrante */
            --gradient-purple: linear-gradient(135deg, #a855f7 0%, #d946ef 100%);  /* Magenta */

            /* Colores de Estructura */
            --bg-body: #f1f5f9;
            --bg-card: #ffffff;
            --border-color: #e2e8f0;
            --sidebar-bg: linear-gradient(180deg, #0f172a 0%, #1e1b4b 100%);
        }

        /* Estructura Base */
        body {
            background-color: var(--bg-body) !important;
            font-family: 'Source Sans 3', sans-serif;
        }

        /* Barra Superior (Navbar) con Borde Multicolor */
        .app-header, .main-header {
            background: #ffffff !important;
            border-bottom: 3px solid transparent !important;
            border-image: linear-gradient(90deg, #6366f1, #06b6d4, #10b981, #f59e0b, #f43f5e) 1 !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }

        /* Menú Lateral (Sidebar) */
        .app-sidebar, .main-sidebar {
            background: var(--sidebar-bg) !important;
        }

        .nav-sidebar .nav-link {
            color: #cbd5e1 !important;
            border-radius: 8px !important;
            margin: 3px 10px !important;
            transition: all 0.25s ease;
        }

        .nav-sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.12) !important;
            color: #38bdf8 !important;
            transform: translateX(3px);
        }

        .nav-sidebar .nav-link.active {
            background: var(--gradient-primary) !important;
            color: #ffffff !important;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4) !important;
        }

        /* Tarjetas con Borde Superior Colorido */
        .card {
            background-color: var(--bg-card) !important;
            border: none !important;
            border-radius: 12px !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05) !important;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card-header {
            background-color: #ffffff !important;
            border-bottom: 2px solid #f1f5f9 !important;
            font-weight: 700;
            color: #1e293b;
        }

        /* Botones con Degradados y Sombras Neón */
        .btn {
            border: none !important;
            border-radius: 8px !important;
            font-weight: 600;
            transition: all 0.2s ease-in-out !important;
        }

        .btn-primary {
            background: var(--gradient-primary) !important;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.35) !important;
            color: #fff !important;
        }

        .btn-success {
            background: var(--gradient-success) !important;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.35) !important;
            color: #fff !important;
        }

        .btn-info {
            background: var(--gradient-info) !important;
            box-shadow: 0 4px 12px rgba(6, 182, 212, 0.35) !important;
            color: #fff !important;
        }

        .btn-warning {
            background: var(--gradient-warning) !important;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35) !important;
            color: #fff !important;
        }

        .btn-danger {
            background: var(--gradient-danger) !important;
            box-shadow: 0 4px 12px rgba(244, 63, 94, 0.35) !important;
            color: #fff !important;
        }

        .btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.08);
        }

        /* Encabezados de Tablas con Tono Azul Claro */
        .table thead th {
            background-color: #e0e7ff !important;
            color: #3730a3 !important;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            border-bottom: 2px solid #c7d2fe !important;
        }

        /* Insignias / Badges Vibrantes */
        .badge.bg-primary { background: var(--gradient-primary) !important; }
        .badge.bg-success { background: var(--gradient-success) !important; }
        .badge.bg-info    { background: var(--gradient-info) !important; }
        .badge.bg-warning { background: var(--gradient-warning) !important; color: #fff !important; }
        .badge.bg-danger  { background: var(--gradient-danger) !important; }

        /* Campos de Entrada Activos */
        .form-control:focus, .form-select:focus {
            border-color: #a855f7 !important;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.25) !important;
        }
    </style>

    <!-- CSS adicional por sección -->
    <?= $this->renderSection('styles') ?>
</head>