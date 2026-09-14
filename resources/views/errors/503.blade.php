@extends('errors.layout')

@section('code', '503')
@section('title', 'Sistem Dalam Pemeliharaan')

@section('icon', 'fa-solid fa-screwdriver-wrench')
@section('icon-bg', 'bg-gradient-to-br from-teal-500/20 via-emerald-500/20 to-teal-500/10 border-teal-500/30 text-teal-400 shadow-lg shadow-teal-500/10')
@section('code-gradient', 'from-teal-400 via-emerald-400 to-sky-400')
@section('btn-gradient', 'from-teal-600 via-emerald-600 to-sky-500 hover:from-teal-500 hover:to-emerald-500')

@section('message', 'Sistem ExpenseTrace saat ini sedang dalam proses pemeliharaan rutin (*maintenance mode*). Silakan kembali dalam beberapa menit.')
