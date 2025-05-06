<div class="navbar">
    <div class="logo">
        <h2>MyAssignment</h2>
    </div>
    <div class="navbar-section">
        <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">Kelola Tugas</a>
        <a href="{{ route('profile', ['username' => request()->query('username')]) }}">My Profile</a>
    </div>
</div>
