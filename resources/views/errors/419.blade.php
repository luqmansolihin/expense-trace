@extends('errors.layout')

@section('code', '419')
@section('title', 'Sesi Halaman Berakhir')

@section('icon', 'fa-solid fa-hourglass-end')
@section('icon-bg', 'bg-gradient-to-br from-purple-500/20 via-indigo-500/20 to-purple-500/10 border-purple-500/30 text-purple-400 shadow-lg shadow-purple-500/10')
@section('code-gradient', 'from-purple-400 via-indigo-400 to-sky-400')
@section('btn-gradient', 'from-purple-600 via-indigo-600 to-sky-500 hover:from-purple-500 hover:to-indigo-500')

@section('message', 'Sesi token keamanan (CSRF) Anda telah kedaluwarsa karena tidak ada aktivitas dalam waktu lama. Silakan muat ulang halaman.')
