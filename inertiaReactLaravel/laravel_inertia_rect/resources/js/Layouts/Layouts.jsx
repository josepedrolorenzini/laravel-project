import { Link } from "@inertiajs/react";

export default function Layout({ children }) {
    return (
        <>
            <header>
                <nav>
                    <Link className="nav-link" href="/">
                        Home
                    </Link>
                    <Link className="nav-link" href="/posts/create">
                        Create
                    </Link>
                    <Link className="nav-link" href="/test">
                        Test
                    </Link>
                    <Link className="nav-link" href="/api">
                        Api
                    </Link>
                    {/* <Link className="nav-link" href="/solana">
                        solana
                    </Link> */}
                    <Link className="nav-link" href="/crypto">
                        crypto
                    </Link>
                </nav>
            </header>

            <main>{ children }</main>
        </>
    );
}