<script setup>
import { QFooter, QHeader, QLayout, QPageContainer } from 'quasar';
</script>

<template>
	<QLayout view="lHr lpr lFr">
		<QHeader
			bordered
			class="bg-white"
		>
			<nav class="row no-wrap items-center justify-between">
				<div class=""></div>
				<img class="bg-red" />
			</nav>
		</QHeader>

		<QPageContainer>
			<RouterView />
		</QPageContainer>

		<QFooter
			bordered
			class="bg-white"
		>
			<nav>
				<ul class="no-margin no-padding row no-wrap">
					<li v-for="({}, index) in ['', '', '']">
						<RouterLink
							:to="'/'"
							class="block"
						></RouterLink>
					</li>
				</ul>
			</nav>
		</QFooter>
	</QLayout>
</template>

<style lang="scss" scoped>
.q-header {
	nav {
		height: 56px;
		padding-inline: 1rem;
		img {
			height: 32px;
			width: 32px;
			border-radius: 50%;
		}
	}
}

.q-footer {
	nav {
		ul {
			li {
				flex: 1;
			}
			a {
				height: 56px;
				&.router-link-exact-active {
					background-color: red;
				}
			}
		}
	}
}
</style>
