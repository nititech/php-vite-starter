/// <reference types="vite/client" />

declare const BASE: string;

interface ImportMetaEnv {
	readonly BASE: string;
}

interface ImportMeta {
	readonly env: ImportMetaEnv;
}
