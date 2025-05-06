<div class="footer">
    <div>
        <h4>MyAssignment</h4>
        <div>
            <a href="{{ route('pengelolaan') }}">Kelola Tugas</a> |
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}">My Profile</a> |
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
        </div>
    </div>
    <div>
        <h4>My Social Media</h4>
        <div>
            <a href="#">Instagram</a> |
            <a href="#">Facebook</a> |
            <a href="#">Twitter</a>
        </div>
    </div>
    <div>
        <h4>Hubungi kami</h4>
        <h4>FAQ</h4>
    </div>
</div>
