<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir') | BPBD Kabupaten Bandung</title>
    <!-- Google Fonts & FontAwesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-blue: #1e3a8a;
            --primary-hover: #1e40af;
            --secondary-bg: #f8fafc;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f1f5f9;
            color: var(--text-dark);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Modern Gradient */
        header {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #2563eb 100%);
            color: #ffffff;
            padding: 30px 20px 25px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        header h1 {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        header p {
            font-size: 0.95rem;
            opacity: 0.85;
            font-weight: 400;
        }

        /* Navigasi */
        nav {
            background-color: #0f172a;
            padding: 12px 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav a {
            color: #94a3b8;
            text-decoration: none;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        nav a:hover, nav a.active {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.12);
        }

        /* Container Main */
        main {
            flex: 1;
            max-width: 850px;
            width: 92%;
            margin: 35px auto;
            background: #ffffff;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            font-size: 0.95rem;
            font-family: inherit;
            transition: all 0.25s ease;
            background-color: #f8fafc;
        }

        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        /* Tombol Modern */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background-color: #2563eb;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.25s ease;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
        }

        .btn:hover {
            background-color: #1d4ed8;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.35);
        }

        /* Badge Status Status Genangan */
        .badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 700;
            color: white;
            display: inline-block;
            font-size: 0.8rem;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }

        .bg-waspada { background-color: #10b981; } /* Emerald Green */
        .bg-siaga { background-color: #f59e0b; }   /* Amber Orange */
        .bg-awas { background-color: #ef4444; }    /* Crimson Red */

        /* Card Laporan */
        .card {
            border: 1px solid var(--border-color);
            border-left: 6px solid #2563eb;
            padding: 20px 24px;
            margin-bottom: 20px;
            border-radius: 12px;
            background-color: #ffffff;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        /* Footer */
        footer {
            background-color: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 20px;
            font-size: 0.88rem;
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body>

    <header>
        <h1><i class="fa-solid fa-house-tsunami"></i> Sistem "LaporBanjir"</h1>
        <p>Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('lapor.form') }}"><i class="fa-solid fa-pen-to-square"></i> Form Pelaporan</a>
        <a href="{{ route('lapor.index') }}"><i class="fa-solid fa-list-check"></i> Daftar Laporan Banjir</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} BPBD Kabupaten Bandung — Prototipe Sistem LaporBanjir</p>
    </footer>

</body>
</html>