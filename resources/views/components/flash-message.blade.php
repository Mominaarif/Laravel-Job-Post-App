@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show " class="fixed top-0 transform -translate-x-1/2 left-1/2 px-48 bg-laravel py-3 text-white">
    <p>
        {{session('message')}}
    </p>
</div>
@endif