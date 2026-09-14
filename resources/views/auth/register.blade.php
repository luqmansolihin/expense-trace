@extends('layouts.app')

@section('title', 'Buat Akun Pengguna Baru (Admin Only)')

@section('content')
<div class="max-w-xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('users.index') }}" class="text-xs font-medium text-purple-700 hover:text-purple-800 inline-flex items-center gap-1.5 mb-2">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar Akun
        </a>
        <h1 class="font-display text-2xl sm:text-3xl font-bold text-slate-900 flex items-center gap-2">
            <i class="fa-solid fa-user-plus text-purple-600"></i> Buat Akun Pengguna Baru
        </h1>
        <p class="text-slate-600 text-xs sm:text-sm mt-1">Form pendaftaran akun khusus Administrator untuk menambahkan Finance atau User Penumpang baru.</p>
    </div>

    <div class="glass-card p-6 sm:p-8 rounded-2xl shadow-sm border border-slate-200 bg-white">
        <form action="{{ route('users.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama Lengkap -->
            <div>
                <label for="name" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Nama Lengkap <span class="text-rose-600">*</span>
                </label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                    placeholder="Contoh: Siti Nurhaliza"
                    class="w-full glass-input rounded-xl px-4 py-2.5 text-sm @error('name') border-rose-500 @enderror">
                @error('name')
                    <p class="text-rose-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Alamat Email <span class="text-rose-600">*</span>
                </label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    placeholder="Contoh: siti@corporate.com"
                    class="w-full glass-input rounded-xl px-4 py-2.5 text-sm font-mono @error('email') border-rose-500 @enderror">
                @error('email')
                    <p class="text-rose-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Peran (Role) -->
            <div>
                <label for="role" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Peran Akun / Hak Akses (Role) <span class="text-rose-600">*</span>
                </label>
                <select id="role" name="role" required class="w-full glass-input rounded-xl px-4 py-2.5 text-sm bg-white text-slate-900 border border-slate-300 @error('role') border-rose-500 @enderror">
                    <option value="finance" {{ old('role', 'finance') == 'finance' ? 'selected' : '' }}>💼 Finance (Pemohon, Pengelola Transaksi & Pembayaran)</option>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>👤 User / Penumpang Perjalanan</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>🛡️ Admin Manager (Akses Penuh)</option>
                </select>
                @error('role')
                    <p class="text-rose-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Password <span class="text-rose-600">*</span>
                </label>
                <input type="password" id="password" name="password" required placeholder="Minimal 8 karakter" class="w-full glass-input rounded-xl px-4 py-2.5 text-sm placeholder-slate-400 @error('password') border-rose-500 @enderror">
                @error('password')
                    <p class="text-rose-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <label for="password_confirmation" class="block text-xs font-medium text-slate-700 mb-1.5">
                    Konfirmasi Password <span class="text-rose-600">*</span>
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Ulangi password" class="w-full glass-input rounded-xl px-4 py-2.5 text-sm placeholder-slate-400">
            </div>

            <!-- Submit buttons -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-200">
                <a href="{{ route('users.index') }}" class="px-5 py-2.5 rounded-xl text-xs font-semibold text-slate-700 hover:text-slate-900 bg-slate-100 hover:bg-slate-200 border border-slate-300 transition-colors">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-xl text-xs font-bold text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 shadow-md shadow-purple-500/20 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-user-plus"></i> Buat Akun Pengguna
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
