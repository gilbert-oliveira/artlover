<div class="flex items-center">
    <h1 class="font-bold text-3xl text-gray-700">
        Products
    </h1>

    <x-input.search placeholder="Search..." class="max-w-xs ml-7"/>

    <div class="flex items-center space-x-6 ml-auto">
        <div class="text-gray-700 font-bold border-b-2 border-current">All</div>
        <div class="text-gray-400 font-bold">Draft</div>
        <div class="text-gray-400 font-bold">Published</div>
    </div>
</div>

<div class="grid grid-cols-3 gap-5 mt-6">
    <x-products.card title="Apple Watch" price="$ 45"
                     src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=799&q=80">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, blanditiis commodi distinctio, dolorum eos
        hic impedit labore nobis
        optio provident quaerat quas sapiente sequi tempora, tempore tenetur ut voluptatem voluptatibus.
    </x-products.card>

    <x-products.card title="Vintage Polaroid" price="$ 76.80"
                     src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, blanditiis commodi distinctio, dolorum eos
        hic impedit labore nobis
        optio provident quaerat quas sapiente sequi tempora, tempore tenetur ut voluptatem voluptatibus.
    </x-products.card>

    <x-products.card title="Yellow Gameboy" price="$ 120"
                     src="https://images.unsplash.com/photo-1531525645387-7f14be1bdbbd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, blanditiis commodi distinctio, dolorum eos
        hic impedit labore nobis
        optio provident quaerat quas sapiente sequi tempora, tempore tenetur ut voluptatem voluptatibus.
    </x-products.card>
</div>
