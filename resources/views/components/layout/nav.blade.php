<nav class="border-b border-border px-6">
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <!-- left -->
        <div>
            <a href="/">Idea</a>
        </div>
        <!-- right -->
        <div class="flex gap-x-5">
            @auth
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary" data-test="logout">Logout</button>
                </form>
            @else
                <a href="/register" class="btn bg-transparent text-white">Register</a>
                <a href="/login" class="btn">Sign In</a>
            @endauth
        </div>
    </div>
</nav>
