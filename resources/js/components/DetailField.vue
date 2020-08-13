<template>
    <div>
        Old
        <ul>
            <li v-for="(value, key) in field.value.old">
                {{key}}: {{value}}
            </li>
        </ul>
        New
        <ul>
            <li v-for="(value, key) in field.value.attributes">
                {{key}}: {{value}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
