<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประวัตินักศึกษา</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="navbar">
        <div class="navbar-container">
            <a href="/" class="navbar-brand">GreenPortal</a>
            <nav class="nav-menu">
                <a href="/" class="nav-link">หน้าแรก</a>
                <a href="/about" class="nav-link">เกี่ยวกับเรา</a>
                <a href="/blog" class="nav-link">บทความ</a>
                <a href="/student/{{ $id }}" class="nav-link active">ข้อมูลนักศึกษา</a>
            </nav>
        </div>
    </header>

    <main class="container animate-fade-in">
        <div class="card">
            <div class="profile-header">
                <div class="profile-avatar">
                    {{ substr($id, 0, 2) ?: 'S' }}
                </div>
                <div>
                    <h2>ประวัตินักศึกษา</h2>
                    <p style="margin: 0; font-size: 1rem;">จักรพันธ์ นิธิณัฐนันท์</p>
                </div>
            </div>

            <div class="profile-info">
                <div class="profile-item">
                    <span class="profile-label">รหัสนักศึกษา:</span>
                    <span class="profile-val">{{ $id }}</span>
                </div>
                <div class="profile-item">
                    <span class="profile-label">ชื่อ-นามสกุล:</span>
                    <span class="profile-val">จักรพันธ์ นิธิณัฐนันท์</span>
                </div>
                <div class="profile-item">
                    <span class="profile-label">คณะ:</span>
                    <span class="profile-val">บริหารธุรกิจ</span>
                </div>
                <div class="profile-item">
                    <span class="profile-label">สาขา:</span>
                    <span class="profile-val">ระบบสารสนเทศ</span>
                </div>
            </div>

            <div class="btn-container">
                <a href="/" class="btn btn-secondary">กลับหน้าแรก</a>
                <a href="/student/{{ $id + 1 }}" class="btn btn-primary">ดูนักศึกษาคนถัดไป &rarr;</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p style="margin: 0; font-size: 0.9rem;">&copy; 2026 GreenPortal. All rights reserved.</p>
    </footer>
</body>

</html>
