<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > All Users')}}
    </x-slot>
    <div class="flex flex-col">

        @if(Session::has('admin_flash'))
            <x-alert type="error" position="top-right">{{ Session('admin_flash') }}</x-alert>
        @endif
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
