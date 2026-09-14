@extends('errors.layout')

@section('code', '403')
@section('title', 'Akses Ditolak (Forbidden)')

@section('icon', 'fa-solid fa-user-shield')
@section('icon-bg', 'bg-amber-500/10 border-amber-500/20 text-amber-400')
@section('code-gradient', 'from-amber-400 to-orange-400')
@section('btn-gradient', 'from-amber-500 to-orange-500 hover:from-amber-400 hover:to-orange-400')

@section('message', 'Anda tidak memiliki izin hak akses role yang cukup untuk membuka, mengedit, atau menghapus data transaksi ini.')
