<template>
    <div class="hidden p-24 relative z-99 w-full" ref="modal">
        <div class="bg-white mx-24 h-full flex-wrap rounded-lg p-4">
            <div class="text-xl flex w-full">
                <div class="w-1/2 flex">Add User</div>
                <div class="w-1/2 flex justify-end">
                    <button class="font-bold px-3" onclick="{closeModal()}">
                        X
                    </button>
                </div>
            </div>
            <div class="form pt-6">
                <form>
                    <div>
                        <input
                            type=""
                            name=""
                            class="w-full border rounded p-1"
                            placeholder="Employee ID*"
                        />
                    </div>

                    <div class="flex w-full pt-4">
                        <div class="w-full md:w-1/2">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="First Name*"
                            />
                        </div>
                        <div class="md:w-1/2 pl-3">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="Last  Name*"
                            />
                        </div>
                    </div>

                    <div class="flex w-full pt-4">
                        <div class="w-full md:w-1/3">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="Email ID*"
                            />
                        </div>
                        <div class="md:w-1/3 pl-3">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="Mobile No*"
                            />
                        </div>

                        <div class="md:w-1/3 pl-3 flex items-center">
                            <select
                                class="w-full border p-1 rounded opacity-50"
                            >
                                <option>Select Role type</option>
                                <option>Role type 1</option>
                                <option>Role type 2</option>
                                <option>Role type 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex w-full pt-4">
                        <div class="w-full md:w-1/3">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="Username*"
                            />
                        </div>
                        <div class="md:w-1/3 pl-3">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="Password*"
                            />
                        </div>

                        <div class="md:w-1/3 pl-3 flex items-center">
                            <input
                                type=""
                                name=""
                                class="w-full border rounded p-1"
                                placeholder="Confirm Password*"
                            />
                        </div>
                    </div>

                    <div class="mt-8 w-full flex-wrap">
                        <div
                            class="px-4 py-6 flex text-black w-full mt-2 bg-gray-200 flex"
                        >
                            <div class="w-2/5 font-bold opacity-50">Name</div>
                            <div
                                class="w-1/5 font-bold opacity-50 flex justify-center"
                            >
                                Read
                            </div>
                            <div
                                class="w-1/5 font-bold opacity-50 flex justify-center"
                            >
                                Write
                            </div>
                            <div
                                class="w-1/5 font-bold opacity-50 flex justify-center"
                            >
                                Delete
                            </div>
                        </div>

                        <!-- FIRST ONE -->
                        <div class="px-4 py-6 flex text-black w-full flex">
                            <div class="w-2/5 font-bold flex items-center">
                                <div class="flex opacity-50">Super Admin</div>
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                        </div>
                        <hr />

                        <!-- SECOND ONE -->
                        <div class="px-4 py-6 flex text-black w-full flex">
                            <div class="w-2/5 font-bold flex items-center">
                                <div class="flex opacity-50">Admin</div>
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                        </div>
                        <hr />

                        <!-- THIRD ONE -->
                        <div class="px-4 py-6 flex text-black w-full flex">
                            <div class="w-2/5 font-bold flex items-center">
                                <div class="flex opacity-50">Employee</div>
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                        </div>
                        <hr />

                        <!-- FOURTH ONE -->
                        <div class="px-4 py-6 flex text-black w-full flex">
                            <div class="w-2/5 font-bold flex items-center">
                                <div class="flex opacity-50">HR Admin</div>
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                            <div
                                class="w-1/5 text-sm flex justify-center items-center"
                            >
                                <input
                                    type="checkbox"
                                    checked
                                    name=""
                                    class="cursor-pointer"
                                />
                            </div>
                        </div>
                        <hr />
                    </div>
                    <div class="flex justify-end pt-8 space-x-5">
                        <button
                            type="submit"
                            class="p-2 bg-blue-400 rounded-lg text-white"
                        >
                            Add User
                        </button>
                        <div
                            onclick="{closeModal()}"
                            class="p-2 bg-gray-400 rounded-lg text-white cursor-pointer"
                        >
                            Cancel
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:"modal"
}
</script>
