<template>
	<svg
		class="inline-block fill-current align-top"
		:class="$props.classList"
	>
		<use :xlink:href="`/compiled/img/sprite.svg#${name}`" />
	</svg>
</template>

<script>
	export default {
		props: {
			name: {
				type: String,
				required: true,
			},

			classList: {
				type: String,
				default: 'w-em h-em',
			},
		},
	};
</script>
