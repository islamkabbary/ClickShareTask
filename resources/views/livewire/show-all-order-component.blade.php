<div>
    <div class="m-6 p-6 shadow-md">
        <div class="text-white capitalize text-xl">show all orders</div>
        <fieldset class="border border-gray-300 rounded mx-3 my-6 p-6">
            <legend class="mx-3 px-1.5 text-white font-bold">Search</legend>
            <div class="flex justify-end">
                <button type="button"
                    class="px-6 py-2 text-black font-semibold capitalize transition-all rounded-lg bg-white ease-in shadow-xs hover:-translate-y-px duration-150"
                    wire:click="clear">clear
                </button>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                <div>
                    <label for="" class="text-xs font-bold capitalize">Name</label>
                    <input type="text"
                        class="w-full mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:!border focus-visible:!outline-none
                        !focus:shadow-lg !focus:shadow focus:!shadow-none !ring-0 block  p-2"placeholder="Name"
                        wire:model.lazy="client_name">
                </div>
                <div>
                    <label for="" class="text-xs font-bold capitalize">Total Amount</label>
                    <input type="text"
                        class="w-full mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:!border focus-visible:!outline-none
                        !focus:shadow-lg !focus:shadow focus:!shadow-none !ring-0 block  p-2"placeholder="Total Amount"
                        wire:model.lazy="total_amount">
                </div>
            </div>
        </fieldset>
        <div class="w-full overflow-x-auto mt-10">
            <table class="w-full mb-4 align-top border-collapse border-gray-200">
                <thead class="align-bottom">
                    <tr>
                        <th
                            class="px-6 py-3 font-bold uppercase align-middle border-b border-collapse text-size-xxs border-b-solid tracking-none text-white">
                            <span style="display: inline-block">
                                #
                            </span>
                        </th>
                        <th
                            class="px-6 py-3 font-bold uppercase align-middle border-b border-collapse text-size-xxs border-b-solid tracking-none text-white">
                            <span style="display: inline-block">
                                Client Name
                            </span>
                        </th>
                        <th
                            class="px-6 py-3 font-bold uppercase align-middle border-b border-collapse text-size-xxs border-b-solid tracking-none text-white">
                            <span style="display: inline-block">
                                Total Amount
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $key => $order)
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b shadow-transparent text-white/80">
                                <div class="text-center">
                                    {{ $orders->firstItem() + $key }}
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b shadow-transparent text-white/80">
                                <div class="text-center">
                                    {{ $order->client_name ? $order->client_name : '-' }}
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b shadow-transparent text-white/80">
                                <div class="text-center">
                                    {{ $order->total_amount ? $order->total_amount : '-' }}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="p-2 align-middle bg-transparent border-b shadow-transparent text-white/60 text-xl font-semibold">
                                <div class="text-center">
                                    Empty Result
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $orders->links() }}
        </div>
    </div>
</div>
