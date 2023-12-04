<script setup>
import { QFooter, QHeader, QLayout, QPage, QPageContainer } from 'quasar';
</script>

<template>
	<QLayout view="lHr lpr lFr">
		<QHeader
			bordered
			class="bg-white"
		>
		</QHeader>

		<QPageContainer>
			<QPage>auth</QPage>
		</QPageContainer>

		<QFooter
			bordered
			class="bg-white"
		></QFooter>
	</QLayout>
</template>

<style lang="scss" scoped></style>
