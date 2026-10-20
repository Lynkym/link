@props([
    'classes' => 'font-label-caps text-label-caps text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200',
])

@auth
    @php($user = auth()->user())
    <div class="flex items-center gap-sm">
        <div class="hidden md:block leading-tight text-right">
            <a href="{{ $user->panelUrl() }}"
               class="font-body-sm text-body-sm text-on-surface hover:text-primary-fixed transition-colors"
               title="Ir a mi panel">
                {{ $user->name }}
            </a>
            <p class="font-label-caps text-label-caps text-on-surface-variant">{{ $user->role_label }}</p>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="{{ $classes }}">
                Cerrar sesión
            </button>
        </form>
    </div>
@else
    <a href="{{ route('login') }}" class="{{ $classes }}">Sign In</a>
@endauth
