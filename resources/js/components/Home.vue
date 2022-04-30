<template>
    <main class="m-0 h-full w-full flex bg-blue-400">
        <div class="h-full mr-10 flex justify-center items-center">
            <div class="mt-12 p-3 text-white">
                <div class="pb-8 cursor-pointer">
                    <i class="fa fa-search"></i>
                </div>
                <div class="pb-8 cursor-pointer">
                    <i class="fa fa-calendar-days"></i>
                </div>
                <div class="pb-8 cursor-pointer">
                    <i class="fa fa-user"></i>
                </div>
                <div class="pb-8 cursor-pointer">
                    <i class="fa fa-comment-dots"></i>
                </div>
                <div class="pb-8 cursor-pointer">
                    <i class="fa fa-file"></i>
                </div>
            </div>
        </div>
        <div class="ml-10 bg-gray-200 h-full w-full fixed flex">
            <div class="w-48">
                <div class="pl-5 pt-24">
                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-table-columns"></i> Dashboard
                    </div>

                    <div class="mb-8 text-blue-400 border-r-2 border-blue-400">
                        <i class="fa fa-users"></i> Users
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-file"></i> Departments
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-users"></i> Employee
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-bolt"></i> Activities
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-calendar-day"></i> Holidays
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-calendar-check"></i> Events
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-money-check"></i> Payroll
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-user"></i> Accounts
                    </div>

                    <div class="mb-8 opacity-50 cursor-pointer">
                        <i class="fa fa-circle-info"></i> Report
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 w-full">
                <div class="flex pl-4 py-4 items-center w-full">
                    <!-- <div class="pr-12"> -->
                    <div class="font-bold text-xl">Users</div>
                    <div class="pl-8">
                        <form>
                            <select class="p-1 rounded">
                                <option>Year</option>
                                <option>2000</option>
                                <option>2001</option>
                                <option>2002</option>
                                <option>2003</option>
                            </select>
                        </form>
                    </div>
                    <div class="bg-white rounded ml-4 mr-72 pr-1">
                        <form>
                            <input
                                type="text"
                                name=""
                                class="p-1 border-0 bg-transparent"
                                placeholder="Search..."
                            />
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- </div> -->
                    <div class="flex justify-end right bg-gray-100">
                        <div class="text-2xl">
                            <form>
                                <select
                                    class="p-1 font-bold rounded bg-transparent cursor-pointer"
                                >
                                    <option>Language</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                </select>
                            </form>
                        </div>

                        <div class="pl-2 text-2xl">
                            <form>
                                <select
                                    class="p-1 font-bold rounded bg-transparent cursor-pointer"
                                >
                                    <option>Reports</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                </select>
                            </form>
                        </div>

                        <div class="pl-2 text-2xl">
                            <form>
                                <select
                                    class="p-1 font-bold rounded bg-transparent cursor-pointer"
                                >
                                    <option>Reports</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                </select>
                            </form>
                        </div>

                        <div class="pl-12">
                            <i class="fa fa-envelope fa-2x"></i>
                        </div>

                        <div class="pl-6">
                            <i class="fa fa-bell fa-2x"></i>
                        </div>

                        <div class="pl-6">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-12 px-12 px-12">
                    <div class="right">
                        <button
                            class="bg-green-800 p-3 rounded text-white"
                            @click="toggle = !toggle"
                        >
                            Add Users
                        </button>
                    </div>
                </div>
                <div
                    class="w-96 bg- -400 mt-12 ml-4 border border-blue-400 flex-wrap"
                    style="width: 95%"
                >
                    <div class="flex text-black p-3 rounded w-full text-white">
                        <div
                            class="flex justify-begin items-center w-1/2 font-bold"
                        >
                            List Users
                        </div>

                        <div class="flex justify-end w-1/2">
                            <form class="border rounded-lg">
                                <input
                                    type="text"
                                    name=""
                                    class="p-1 border-0 bg-transparent"
                                    placeholder="Search..."
                                />
                                <button class="pr-1">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div
                        class="px-4 py-6 flex text-black w-full mt-2 bg-gray-200 flex"
                    >
                        <div class="w-2/6 font-bold opacity-50">Name</div>
                        <div
                            class="w-1/6 font-bold opacity-50 flex justify-center"
                        >
                            Create Date
                        </div>
                        <div
                            class="w-1/6 font-bold opacity-50 flex justify-center"
                        >
                            Role
                        </div>
                        <div
                            class="w-2/6 font-bold opacity-50 flex justify-center"
                        >
                            Action
                        </div>
                    </div>

                    <!-- FIRST ONE -->
                    <div
                        class="px-4 py-6 flex text-black w-full flex"
                        v-for="(user, index) in users"
                        :key="index"
                        :value="user.id"
                    >
                        <div class="w-2/6 font-bold flex items-center w-6/6">
                            <div class="flex w-1/2">
                                <img
                                    src="https://www.istockphoto.com/photo/male-lion-resting-on-a-rock-gm1333977253-416278970"
                                    class="w-8 rounded-full"
                                />
                                <div class="flex-wrap pl-2">
                                    <div>
                                        {{ user.first_name }}
                                        {{ user.last_name }}
                                    </div>
                                    <div class="text-xs opacity-50">
                                        {{ user.email }}
                                    </div>
                                </div>
                            </div>

                            <div class="w-1/2 flex justify-end pr-6">
                                <div
                                    class="bg-red-700 px-4 w-33 text-center py-1 rounded-lg text-white font-normal"
                                >
                                    {{ user.role }}
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-1/6 text-sm flex justify-center items-center"
                        >
                            {{ user.created_at }}
                        </div>
                        <div
                            class="w-1/6 text-sm flex justify-center items-center"
                        >
                            CEO and Founder
                        </div>
                        <div
                            class="w-2/6 text-sm flex justify-center items-center opacity-50"
                        >
                            <i
                                class="fa fa-pen-to-square fa-2x cursor-pointer"
                            ></i>
                            <button @click="userdelete(user.id)">
                                <i
                                    class="fa fa-trash-can fa-2x pl-6 cursor-pointer"
                                ></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->

        <div class="p-24 relative z-99 w-full" id="modalOpen" v-if="toggle">
            <div class="bg-white mx-24 h-full flex-wrap rounded-lg p-4">
                <div class="text-xl flex w-full">
                    <div class="w-1/2 flex">Add User</div>
                    <div class="w-1/2 flex justify-end">
                        <button
                            class="font-bold px-3"
                            @click="toggle = !toggle"
                        >
                            X
                        </button>
                    </div>
                </div>
                <div class="form pt-6">
                    <form>
                        <div>
                            <input
                                type="text"
                                v-model="form.employee_id"
                                class="w-full border rounded p-1"
                                placeholder="Employee ID*"
                            />
                        </div>

                        <div class="flex w-full pt-4">
                            <div class="w-full md:w-1/2">
                                <input
                                    type="text"
                                    v-model="form.first_name"
                                    class="w-full border rounded p-1"
                                    placeholder="First Name*"
                                />
                            </div>
                            <div class="md:w-1/2 pl-3">
                                <input
                                    type="text"
                                    v-model="form.last_name"
                                    class="w-full border rounded p-1"
                                    placeholder="Last  Name*"
                                />
                            </div>
                        </div>

                        <div class="flex w-full pt-4">
                            <div class="w-full md:w-1/3">
                                <input
                                    type="text"
                                    v-model="form.email"
                                    class="w-full border rounded p-1"
                                    placeholder="Email ID*"
                                />
                            </div>
                            <div class="md:w-1/3 pl-3">
                                <input
                                    type="text"
                                    v-model="form.mobile_number"
                                    class="w-full border rounded p-1"
                                    placeholder="Mobile No*"
                                />
                            </div>

                            <div class="md:w-1/3 pl-3 flex items-center">
                                <select
                                    class="w-full border p-1 rounded opacity-50"
                                    v-model="form.role"
                                >
                                    <option>Select Role type</option>
                                    <option>Super Admin</option>
                                    <option>Admin</option>
                                    <option>Employee</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex w-full pt-4">
                            <div class="w-full md:w-1/3">
                                <input
                                    type="text"
                                    v-model="form.username"
                                    class="w-full border rounded p-1"
                                    placeholder="Username*"
                                />
                            </div>
                            <div class="md:w-1/3 pl-3">
                                <input
                                    type="password"
                                    v-model="form.password"
                                    class="w-full border rounded p-1"
                                    placeholder="Password*"
                                />
                            </div>

                            <div class="md:w-1/3 pl-3 flex items-center">
                                <input
                                    type="password"
                                    v-model="form.confirm_pass"
                                    class="w-full border rounded p-1"
                                    placeholder="Confirm Password*"
                                />
                            </div>
                        </div>

                        <div class="mt-8 w-full flex-wrap">
                            <div
                                class="px-4 py-6 flex text-black w-full mt-2 bg-gray-200 flex"
                            >
                                <div class="w-2/5 font-bold opacity-50">
                                    Name
                                </div>
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
                                    <div class="flex opacity-50">
                                        Super Admin
                                    </div>
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        value="read"
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        value="write"
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        value="delete"
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                            </div>
                            <hr />

                            <!--SECOND ONE -->
                            <div class="px-4 py-6 flex text-black w-full flex">
                                <div class="w-2/5 font-bold flex items-center">
                                    <input type="text" hidden :value="admin" />
                                    <div class="flex opacity-50">Admin</div>
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
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
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
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
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                                <div
                                    class="w-1/5 text-sm flex justify-center items-center"
                                >
                                    <input
                                        type="checkbox"
                                        class="cursor-pointer"
                                    />
                                </div>
                            </div>
                            -->
                            <hr />
                        </div>
                        <div class="flex justify-end pt-8 space-x-5">
                            <button
                                type="submit"
                                class="p-2 bg-blue-400 rounded-lg text-white"
                                @click="create"
                            >
                                Add User
                            </button>
                            <div
                                @click="toggle = !toggle"
                                class="p-2 bg-gray-400 rounded-lg text-white cursor-pointer"
                            >
                                Cancel
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
import axios from "axios";
export default {
    name: "Home",
    data() {
        return {
            title: "hello",
            toggle: false,

            form: {
                employee_id: "",
                first_name: "",
                last_name: "",
                username: "",
                email: "",
                mobile_number: "",
                role: "",
                password: "",
                confirm_pass: "",
                permission: [],
            },
            super_admin: "super admin",
            admin: "Admin",
            Hr_admin: "Hr Admin",
            employee: "employee",
            users: [],
        };
    },
    mounted() {
        this.read();
    },
    methods: {
        validate() {
            if (this.form.password == this.form.confirm_pass) {
                return true;
            } else {
                return false;
            }
        },
        create(e) {
            e.preventDefault();
            if (this.validate() === true) {
                axios
                    .post("http://localhost:8000/api/user", this.form)
                    .then((res) => {
                        if (res.data.message == "created successfully") {
                            alert(res.data.message);
                        }
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            }
        },
        read() {
            axios.get("http://localhost:8000/api/user").then((res) => {
                this.users = res.data;
            });
        },
        startEdit() {},
        update(id) {
            axios.put();
        },
        userdelete(id) {
            console.log(id)
            //axios.delete(`http://localhost:8000/api/user/${id}`);
        },
    },
};
</script>
