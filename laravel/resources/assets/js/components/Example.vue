<template>
    <el-row type="flex" justify="center" style="margin-top: 15%">
        <el-col :span="6" >
<el-card class="box-card">
    <el-row type="flex" justify="center">
    <h1>登陆</h1>
    </el-row>
    <el-row type="flex" justify="center">
        <el-col >
        <el-form label-width="80px">
            <el-form-item label="用户名:">
                <el-input placeholder="请输入账号"></el-input>
            </el-form-item>
            <el-form-item label="密码:" >
                <el-input placeholder="请输入密码"></el-input>
            </el-form-item>
            <el-form-item >
                <el-button type="success" style="width: 100%" @click="" >登陆</el-button>
            </el-form-item>
        </el-form>
        </el-col>
    </el-row>

</el-card>
        </el-col>
    </el-row>
</template>

<style>
    .mg{
        margin-right: 80px;
    }

</style>

<script>
    export default{
        method:{

        }
    }
</script>