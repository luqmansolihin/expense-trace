@extends('errors.layout')

@section('code', '403')
@section('title', 'Akses Ditolak (Forbidden)')

@section('icon', 'fa-solid fa-user-shield')
@section('icon-bg', 'bg-gradient-to-br from-amber-500/20 via-orange-500/20 to-amber-500/10 border-amber-500/30 text-amber-400 shadow-lg shadow-amber-500/10')
@section('code-gradient', 'from-amber-400 via-orange-400 to-yellow-400')
@section('btn-gradient', 'from-amber-500 via-orange-600 to-yellow-500 hover:from-amber-400 hover:to-orange-500')

@section('message', 'Anda tidak memiliki izin hak akses role yang cukup untuk membuka, mengedit, atau menghapus data transaksi ini.')
