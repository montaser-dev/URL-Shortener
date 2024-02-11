<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section>
                        <p class="text-2xl text-blue-800">Paste the URL to be shortened </p>
                        @if (session('success_message'))
                        {!! session('success_message') !!} 
                            @endif
                        <form method="POST" action="{{ route('short.url') }}">
                            @csrf
                          <input class="mt-2 border border-gray-300 rounded-lg" type="text" name="original_url" />
                            @error('original_url')
                                <span class="text-red-400 m-2 p-2">{{ $message }}</span>
                            @enderror
                          <button class="mt-2 px-6 py-2 bg-blue-600 hover:bg-blue-800 rounded-lg text-white" type="submit">Shorten URL</button>
                        </form>
                        <form action="{{ route('user.links') }}">
                            <button class="mt-1 px-6 py-2 bg-blue-600 hover:bg-blue-800 rounded-lg text-white" type="submit">URLs Stats</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>