<div class="max-w-7xl mx-auto">
    <div class="bg-white shadow rounded-lg mt-10 p-4 space-y-4  flex flex-col" style="height: 700px;">
        <div class="border-b border-gray-200 pb-4">
            <h1 class="text-2xl font-bold">CHATROOM : {{ $room->name }}</h1>
        </div>
        <div class="flex h-full">
            <div class="w-3/12 h-full border-r border-gray-200 mr-4">
                <div class="pb-2">
                    <h3 class="text-xl font-bold">users</h3>
                </div>
                <ul>
                    <li>hesam</li>
                    <li>ali</li>
                </ul>
            </div>
            <div class="w-9/12 flex flex-col justify-between">
                @if($messages->count())
                    <div class="divide-y space-y-2 overflow-y-scroll" style="max-height: 500px;">
                        @foreach($messages as $message)
                            <div class="pt-2">
                                <div>
                                    <span class="font-bold border-r border-gray-200 pr-2 mr-1">{{ $message->user->name }}</span>
                                    <span class="text-gray-400">{{ \Carbon\Carbon::parse($message->create_at)->ago() }}</span>
                                </div>
                                <p>
                                    {{ $message->body }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-gray-400">
                        Waiting For First Message
                    </div>
                @endif

                {{--                <div class="text-gray-400">--}}
                {{--                    Waiting For First Message--}}
                {{--                </div>--}}
                <div class="flex items-start space-x-3">
                    <textarea class="rounded-md p-2 shadow-sm border-gray-300 w-full" placeholder="Your Message" name="message" rows="2" widht="100%"></textarea>
                    <button class="bg-blue-500 text-white rounded p-2 px-4">send</button>
                </div>
            </div>
        </div>
    </div>
</div>
