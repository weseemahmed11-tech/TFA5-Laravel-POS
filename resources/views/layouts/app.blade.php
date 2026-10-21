<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'CounterPoint POS' }}</title>
    <style>
        :root { --ink: #172033; --muted: #687386; --paper: #f7f8fb; --card: #ffffff; --line: #e5e8ef; --accent: #f26b38; --accent-dark: #c94b20; --navy: #1d2a44; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; line-height: 1.6; }
        a { color: inherit; }
        .site-header { background: var(--navy); color: #fff; }
        .nav-shell, .main-shell { width: min(1120px, calc(100% - 40px)); margin: 0 auto; }
        .nav-shell { display: flex; align-items: center; justify-content: space-between; gap: 24px; min-height: 76px; }
        .brand { display: flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-weight: 800; letter-spacing: .02em; }
        .brand-mark { display: grid; place-items: center; width: 38px; height: 38px; border-radius: 11px; color: #fff; background: var(--accent); font-weight: 900; }
        .nav-links { display: flex; flex-wrap: wrap; gap: 8px; }
        .nav-links a { padding: 8px 12px; border-radius: 8px; color: #dce2ef; font-size: .95rem; text-decoration: none; }
        .nav-links a:hover, .nav-links a.active { color: #fff; background: rgba(255,255,255,.12); }
        main { padding: 56px 0 72px; }
        .eyebrow { color: var(--accent-dark); font-size: .78rem; font-weight: 800; letter-spacing: .13em; text-transform: uppercase; }
        h1, h2, h3 { margin: 0 0 14px; line-height: 1.15; }
        h1 { font-size: clamp(2.2rem, 5vw, 4.2rem); letter-spacing: -.05em; }
        h2 { font-size: clamp(1.65rem, 3vw, 2.4rem); letter-spacing: -.035em; }
        p { color: var(--muted); }
        .hero { display: grid; grid-template-columns: 1.25fr .75fr; align-items: center; gap: 48px; padding: 30px 0 72px; }
        .hero p { max-width: 600px; font-size: 1.1rem; }
        .button { display: inline-block; margin-top: 18px; padding: 12px 18px; border-radius: 9px; color: #fff; background: var(--accent); font-weight: 750; text-decoration: none; }
        .button:hover { background: var(--accent-dark); }
        .terminal-card { padding: 28px; border: 1px solid #364663; border-radius: 20px; color: #eaf0fb; background: #253452; box-shadow: 0 18px 40px rgba(26, 40, 68, .18); }
        .terminal-top { display: flex; gap: 7px; margin-bottom: 26px; }
        .terminal-top span { width: 10px; height: 10px; border-radius: 50%; background: #f26b38; }
        .terminal-top span:nth-child(2) { background: #f5bb5d; } .terminal-top span:nth-child(3) { background: #6cc28a; }
        .terminal-line { display: flex; justify-content: space-between; gap: 20px; padding: 13px 0; border-bottom: 1px solid rgba(255,255,255,.1); font-size: .92rem; }
        .terminal-line:last-child { border-bottom: 0; }
        .terminal-value { color: #f5bb5d; font-weight: 800; }
        .section-heading { display: flex; align-items: end; justify-content: space-between; gap: 24px; margin-bottom: 26px; }
        .section-heading p { margin: 0; }
        .cards { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px; }
        .card { padding: 24px; border: 1px solid var(--line); border-radius: 16px; background: var(--card); box-shadow: 0 8px 24px rgba(29, 42, 68, .04); }
        .card-header { display: flex; align-items: start; justify-content: space-between; gap: 16px; margin-bottom: 18px; }
        .card h3 { margin-bottom: 4px; font-size: 1.15rem; }
        .record-id { color: var(--muted); font-size: .84rem; font-weight: 700; }
        .badge { padding: 5px 9px; border-radius: 999px; color: #27643d; background: #e4f4e9; font-size: .75rem; font-weight: 800; white-space: nowrap; }
        .badge.pending, .badge.away { color: #805d1c; background: #fff2cf; }
        .badge.offline { color: #5c6574; background: #edf0f4; }
        .details { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 15px; margin: 0; }
        .details dt { color: var(--muted); font-size: .75rem; font-weight: 800; letter-spacing: .05em; text-transform: uppercase; }
        .details dd { margin: 2px 0 0; font-size: .95rem; overflow-wrap: anywhere; }
        .about-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; margin-top: 34px; }
        .about-grid .card strong { display: block; margin-bottom: 7px; color: var(--accent-dark); font-size: 1.7rem; }
        .page-intro { max-width: 680px; margin-bottom: 36px; }
        footer { padding: 26px 0; border-top: 1px solid var(--line); color: var(--muted); font-size: .9rem; }
        @media (max-width: 760px) { .nav-shell { align-items: flex-start; flex-direction: column; padding: 18px 0; } .hero { grid-template-columns: 1fr; padding-top: 10px; } .cards, .about-grid { grid-template-columns: 1fr; } .section-heading { align-items: start; flex-direction: column; } main { padding-top: 38px; } }
        @media (max-width: 460px) { .nav-shell, .main-shell { width: min(100% - 28px, 1120px); } .details { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="nav-shell">
            <a class="brand" href="{{ route('home') }}"><span class="brand-mark">CP</span><span>CounterPoint POS</span></a>
            <nav class="nav-links" aria-label="Main navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('customers.*') ? 'active' : '' }}" href="{{ route('customers.index') }}">Customers</a>
                <a class="{{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-shell">@yield('content')</div>
    </main>
    <footer><div class="main-shell">A simple Laravel foundations project for learning the building blocks of a POS.</div></footer>
</body>
</html>
