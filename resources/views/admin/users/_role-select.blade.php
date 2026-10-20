<div>
    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="role">Rol *</label>
    <select name="role" id="role"
            class="w-full bg-background border border-outline-variant rounded-lg px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary-fixed focus:ring-1 focus:ring-primary-fixed/20 transition-all">
        @foreach($roles as $role)
            <option value="{{ $role->name }}" {{ $selected === $role->name ? 'selected' : '' }}>
                {{ \App\Models\User::roleLabel($role->name) }}
            </option>
        @endforeach
    </select>
    @error('role')
        <p class="text-error text-body-sm mt-xs">{{ $message }}</p>
    @enderror
</div>
