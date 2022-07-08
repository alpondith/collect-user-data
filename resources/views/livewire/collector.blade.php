<div>
    <div wire:poll.1s="check" class="center loader "></div>
    {{-- <div  class="center loader "></div> --}}
    <div>Counter : {{ $count }}</div>
    <div>IP Address : {{ $ipAddress }}</div>
    <div>Time : {{ $time }}</div>
    <div>Url path : {{ $path }}</div>
</div>
